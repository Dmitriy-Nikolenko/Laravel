<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Source;
use DB;
use Illuminate\Http\Request;

class OneNewsController extends Controller
{
    public function getOneNews($id)
    {
        $news = News::query()->findOrFail($id);
        $newsSource = Source::all();
        return view('onenews', compact('news', 'newsSource'));

    }
}
