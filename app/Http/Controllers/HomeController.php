<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {
        return view ('home');
    }
    public function testimoni()
    {
        return view ('testimoni');
    }
    public function event()
    {
        return view ('event');
    }
    
    public function googleplay()
    {
        return view ('googleplay');
    }
    
    public function appstore()
    {
        return view ('appstore');
    }
}
