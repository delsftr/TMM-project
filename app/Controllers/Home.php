<?php

namespace App\Controllers;

use App\Models\ArticleModel;

class Home extends BaseController
{
    protected $ArticleModel;

    public function __construct()
    {
        $this->ArticleModel = new ArticleModel();
    }

    public function index()
    {
        $data['article'] = $this->ArticleModel->getData();


        return view('homepage', $data);
    }

    public function aboutUs()
    {
        return view('about-us');
    }
}
