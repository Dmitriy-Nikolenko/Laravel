<?php

namespace App\Http\Controllers\news;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OneNewsController extends Controller
{
    public function getOneNews($id)
    {
        $news = News::query()->with('source')->findOrFail($id);
        return view('news.onenews', compact('news'));

    }
}
