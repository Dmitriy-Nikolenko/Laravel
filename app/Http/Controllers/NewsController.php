<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function getCategoryNews($category) {
        $news = $this->getNews($category);
        $html = "<a href=\"/home\">На главную</a><br>
                 <a href=\"/category\">Категории новостей</a><br>
                 <a href=\"/auth\">Авторизация</a><br>
                 <a href=\"/addnews\">Добавить новость</a><br>
                 <h2>Новости по категории {$category}</h2>";

        foreach ($news as $item) {
            $html .= <<<HTML
                 <a href="/news/{$category}/{$item['id']}"><h4>{$item['title']}</h4></a>
    HTML;
        }
      return  $html;
}

}
