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
        SendEmailJob::dispatch($request->all())->delay(now()->addSeconds(5));

        return redirect()->route('contact');
    }

    public function getProjects()
    {
        $projects = Project::get();

        return json_encode($projects);
    }

}
