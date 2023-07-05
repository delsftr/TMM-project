<?php

namespace App\Controllers;

use App\Models\ArticleModel;

class Article extends BaseController
{
    protected $ArticleModel;

    public function __construct()
    {
        $this->ArticleModel = new ArticleModel();
    }

    public function Article($slug = NULL)
    {

        $result = $this->ArticleModel->getDetail($slug);

        if (count($result)) {
            return view('article', ['article'=>$result[0]]);
        } else {
            return redirect()->to('/');
        }
        // $data['title'] = "article";

        // return view('article', $data);
    }
}
