<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddNewsController extends Controller
{
    public function addNews()
    {

        $html = <<<HTML
        <a href="/home">На главную</a><br>
    <form>
        <input type="text" name="title_news" placeholder="Название новости"><br>
        <textarea name="text_news" placeholder="Подробное описание новости"></textarea><br>
        <textarea name="preview_news" placeholder="Краткое описание новости"></textarea><br>
        <button name="add_news">Добавить новость</button>
    </form>

HTML;


        return $html;
    }
}
