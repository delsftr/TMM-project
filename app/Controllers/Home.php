<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('homepage');
    }

    public function aboutus()
    {
        return view('about_us');
    }
}
