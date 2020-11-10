<?php

namespace App\Http\Controllers;

use App\Models\Category;
use DB;
use Illuminate\Http\Request;

class NewsCategoryController extends Controller
{
    public function getCategoryNews()
    {
        $category = Category::all();
        if ($category)
        {
            return view('category', compact('category'));
        }
        return '<h1>Нет новостей</h1>';
    }
}
