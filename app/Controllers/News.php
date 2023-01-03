<?php

namespace App\Controllers;
use App\Models\NewsModel;

class News extends BaseController
{
    public function index()
    {
        $model = model(NewsModel::class);

        $data = [
            'news' => $model->getNews(),
            'title' => 'News archieve',
        ];

        return view('templates/header', $data)
            . view('news/overview')
            . view('templates/footer');
    }

    public function view($slug = null)
    {
        $model = model(NewModel::class);
        $data['news'] = $model->getNews($slug);
    }
}