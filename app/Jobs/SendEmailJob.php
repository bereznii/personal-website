<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

use App\User;
use App\Letter;
use App\History;
use App\Mail\SendEmail;
use Illuminate\Support\Facades\Mail;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $message;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($message)
    {
        $this->message = $message;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        /**
         * to avoid situation when saving failing, while letter is sent multiple times
         * letter will be sent only after creating instances of History and Letter objects
         * so if it is not possible to create records in these table, letter won't be sent
         */

        //writhing history
        $record = new History;
        $record->type = 'sending letter';
        $info = ['file' => __FILE__,'namespace' => __NAMESPACE__,'method' => __METHOD__,'line' => __LINE__];
        $record->payload = json_encode($info);

        //writing letter
        $letter = new Letter;
        $letter->name = $this->message['name'];
        $letter->email = $this->message['email'];
        $letter->subject = $this->message['subject'];
        $letter->reason = $this->message['reason'];
        $letter->message = $this->message['message'];
        
        //sending letter
        $admin = User::where('id', 1)->get();
        Mail::to($admin)->send(new SendEmail($this->message));

        //saving job
        $record->save();

        //saving letter
        $letter->save();
    }
}
