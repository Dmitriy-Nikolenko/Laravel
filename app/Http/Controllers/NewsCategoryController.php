<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class NewsCategoryController extends Controller
{
    public function getCategoryNews()
    {
        $category = DB::table('category')->select('*')->get();
        if ($category)
        {
            return view('category', compact('category'));
        }
        return '<h1>Нет новостей</h1>';
    }
}
