<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OneNewsController extends Controller
{
    public function getOneNews($category, $id) {
        $news =  $this->getNewsForCategoryId($category, $id);

        $html = "<a href=\"/home\">На главную</a><br>
                 <a href=\"/category\">Категории новостей</a><br>
                 <a href=\"/auth\">Авторизация</a><br>
                 <a href=\"/addnews\">Добавить новость</a><br>";
        foreach ($news as $oneNews) {
            $html .= <<<HTML
               <h4>{$oneNews['title']}</h4>
                <p>{$oneNews['text']}</p><br>
HTML;
        }
        return $html;
    }
}
