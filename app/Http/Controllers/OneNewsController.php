<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class OneNewsController extends Controller
{
    public function getOneNews($id)
    {
        $news = DB::table('news')->find($id);
        $newsSource = DB::table('source')->get();
        if ($news)
        {

            return view('onenews', compact('news', 'newsSource'));
        }
        return '<h1>Нет новостей</h1>';
    }
}
