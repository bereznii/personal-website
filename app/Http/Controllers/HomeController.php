<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\Project;
use App\History;
use App\Letter;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.admin');
    }

    /**
     * Shows projects.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function projects()
    {
        $projects = Project::get();
        $uri = $this->getCurrentURI();
        return view('admin.projects', ['uri' => $uri, 'projects' => $projects]);
    }

    /**
     * Shows jobs.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function jobs()
    {
        $history = History::orderBy('id', 'DESC')->paginate(10);
        foreach($history as $record) {
            $payloads[] = json_decode($record->payload);
        }

        $payloads = $payloads ?? [];

        $uri = $this->getCurrentURI();
        return view('admin.jobs', ['uri' => $uri, 'history' => $history, 'payloads' => $payloads]);
    }

    /**
     * Shows sended letters
     */
    public function letters()
    {
        $letters = Letter::orderBy('id', 'DESC')->paginate(10);

        $uri = $this->getCurrentURI();
        return view('admin.letters', ['uri' => $uri, 'letters' => $letters]);
    }

    /**
     * Shows specified letter
     */
    public function openLetter($id)
    {
        $letter = Letter::find($id);

        $uri = $this->getCurrentURI();
        return view('admin.openletter', ['uri' => $uri, 'letter' => $letter]);
    }

}
