<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getAuth()
    {

        $html = <<<HTML
            <a href="/home">На главную</a><br>
    <form>
            <input type="text" name="login" placeholder="Введите логин"><br>
            <input type="password" name="password" placeholder="Введите пароль"><br>
            <input type="checkbox" name="save" placeholder="Запомнить меня">
            <button>Войти</button>

    </form>

HTML;


        return $html;
    }
}
