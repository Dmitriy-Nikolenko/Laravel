<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OneNewsController extends Controller
{
    public function getOneNews($id)
    {
        if(!empty($this->getNewsForCategoryId($id)))
        {
            return view('onenews', ['news' => $this->getNewsForCategoryId($id)]);
        }
        return '<h1>Нет новостей</h1>';
    }
}
