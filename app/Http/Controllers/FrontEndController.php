<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;

class FrontEndController extends Controller
{
    /**
     * Shows the MyWork page
     */
    public function mywork()
    {
        $projects = Project::get();
        
        return view('pages.mywork', ['projects' => $projects]);
    }

    /**
     * Shows the Software page
     */
    public function software()
    {
        $projects = Project::get();
        
        return view('pages.software', ['projects' => $projects]);
    }

    /**
     * Shows the Contact page
     */
    public function contact()
    {
        return view('pages.contact');
    }
}
