<?php


use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminNewsController;
use App\Http\Controllers\AdminFeedbackController;
use App\Http\Controllers\AdminSourceController;
use App\Http\Controllers\DeleteNewsController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\NewsCategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OneNewsController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\OrderController;
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

Route::resource('/feedback', FeedbackController::class);

Route::resource('/order', OrderController::class);

Route::prefix('/admin')->group(function() {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::resource('news', AdminNewsController::class);
    Route::resource('feedback', AdminFeedbackController::class);
    Route::resource('orders', AdminOrderController::class);
    Route::resource('category', AdminCategoryController::class);
    Route::resource('source', AdminSourceController::class);
});











