<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsCategoryController extends Controller
{
    public function getCategoryNews()
    {
        if (!empty($this->getCategory()))
        {
            return view('category', ['category' => $this->getCategory()]);
        }
        return '<h1>Нет новостей</h1>';
    }
}
