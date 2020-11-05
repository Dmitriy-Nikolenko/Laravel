<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function getCategoryNews($categoryId)
    {
        $category = DB::table('category')->find($categoryId);

        if ($category) {
            $news = DB::table('news')->where('category_id', '=', $categoryId)->get();


            return view('news', compact('news', 'category'));
        }
        return '<h1>Нет новостей</h1>';

    }

}
