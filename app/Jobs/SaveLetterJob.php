<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

use App\Letter;
use App\History;

class SaveLetterJob implements ShouldQueue
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
        //saving history
        $record = new History;
        $record->type = 'sending letter';
        $info = ['file' => __FILE__,'namespace' => __NAMESPACE__,'method' => __METHOD__,'line' => __LINE__];
        $record->payload = json_encode($info);
        $record->save();

        //saving letter
        $letter = new Letter;
        $letter->name = $this->message['name'];
        $letter->email = $this->message['email'];
        $letter->subject = $this->message['subject'];
        $letter->reason = $this->message['reason'];
        $letter->message = $this->message['message'];
        $letter->save();
    }
}
