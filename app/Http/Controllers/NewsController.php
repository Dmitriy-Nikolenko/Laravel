<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function getCategoryNews($categoryId)
    {
    if (!empty($this->getNews($categoryId)))
    {
        $news = $this->getNews($categoryId);
        $category = $this->categories[$categoryId];
        return view('news', compact('news', 'category'));
    }
        return '<h1>Нет новостей</h1>';

}

}
