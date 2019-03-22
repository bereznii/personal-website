<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

use App\Text;

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
     * Shows texts.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function texts()
    {
        //$texts = Text::get();
        //dd($texts);
        $uri = $this->getCurrentURI();
        //return view('admin.texts', ['uri' => $uri, 'texts' => $texts]);
    }

    /**
     * Shows users.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function users()
    {
        $uri = $this->getCurrentURI();
        return view('admin.users')->with('uri', $uri);
    }

    /**
     * Shows jobs.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function jobs()
    {
        $uri = $this->getCurrentURI();
        return view('admin.jobs')->with('uri', $uri);
    }

    /**
     * Get current URI.
     */
    public function getCurrentURI()
    {
        $url = URL::current();
        $uri = array_reverse(explode('/', $url))[0];
        return $uri;
    }
}
