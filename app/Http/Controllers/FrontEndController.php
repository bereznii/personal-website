<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    /**
     * Shows the MyWork page
     */
    public function mywork()
    {
        return view('pages.mywork');
    }

    /**
     * Shows the Software page
     */
    public function software()
    {
        return view('pages.software');
    }

    /**
     * Shows the Contact page
     */
    public function contact()
    {
        return view('pages.contact');
    }
}
