<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddNewsController extends Controller
{
    public function addNews() {

        $html = <<<HTML
        <a href="/home">На главную</a><br>
    <form>
        <input type="text" placeholder="Название новости"><br>
        <textarea placeholder="Подробное описание новости"></textarea><br>
        <textarea placeholder="Краткое описание новости"></textarea><br>
        <button>Добавить новость</button>
    </form>

HTML;


        return $html;
    }
}
