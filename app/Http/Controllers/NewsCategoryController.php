<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\AdminParserController;
use App\Models\Category;
use DB;
use Illuminate\Http\Request;

class NewsCategoryController extends Controller
{
    public function getCategoryNews()
    {
        $category = Category::query()->paginate(6);
        if ($category)
        {
            return view('category', compact('category'));
        }
        return '<h1>Нет новостей</h1>';
    }
}
