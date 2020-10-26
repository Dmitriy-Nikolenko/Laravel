<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsCategoryController extends Controller
{
    public function getCategoryNews() {
        $cat = $this->getCategory();

        $html = "  <a href=\"/home\">На главную</a><br>
                   <a href=\"/category\">Категории новостей</a><br>
                   <a href=\"/auth\">Авторизация</a><br>
                   <a href=\"/addnews\">Добавить новость</a><br>
                   <h1>Категории новостей:</h1>";
        foreach ($cat as $category) {
            $html .= <<<HTML

       <a href="/news/{$category}"><h3>{$category}</h3></a>
HTML;
        }
    return $html;
    }
}
