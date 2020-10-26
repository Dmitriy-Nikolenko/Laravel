<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function info() {
        $info = <<<HTML
        <a href="/category">Категории новостей</a><br>
        <a href="/auth">Авторизация</a><br>
        <a href="/addnews">Добавить новость</a><br>
        <h1>Добро пожаловать на наш сайт. Сайт является агрегатором новостей!!!</h1>
HTML;

        return $info;

    }
}
