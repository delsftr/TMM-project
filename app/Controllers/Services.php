<?php

namespace App\Controllers;

class Services extends BaseController
{
    public function socialmedia()
    {
        return view('social-media');
    }

    public function photography()
    {
        return view('photography');
    }

    public function videoproduction()
    {
        return view('video-production');
    }

    public function webdesign()
    {
        return view('web-design');
    }
}
