<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Project;
use App\Jobs\SendEmailJob;

class BackController extends Controller
{
    /**
     * Sends email.
     */
    public function sendEmail(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'subject' => 'required|alpha_num|max:255',
            'reason' => 'required|alpha_num|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|max:65000',
        ]);
        
        SendEmailJob::dispatch($request->all())->delay(now()->addSeconds(5));

        return response()->json(null, 200);
        
    }

}
