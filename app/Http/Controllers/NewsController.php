<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use DB;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function getCategoryNews($categoryId)
    {
        $category = Category::query()->findOrFail($categoryId);
        $news = News::query()->select('*')->where('category_id', '=', $categoryId)->get();

            return view('news', compact('news', 'category'));

    }

}
