<?php

use App\Http\Controllers\AddNewsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsCategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OneNewsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/category', [NewsCategoryController::class, 'getCategoryNews']);

Route::get('/news/category/{category}', [NewsController::class, 'getCategoryNews'])->name('categoryNews');

Route::get('/news/{id}', [OneNewsController::class, 'getOneNews'])->name('newsId');

Route::get('/auth', [AuthController::class, 'getAuth']);

Route::get('/addnews', [AddNewsController::class, 'addNews']);








