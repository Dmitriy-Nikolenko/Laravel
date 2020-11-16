 <?php


use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminNewsController;
use App\Http\Controllers\Admin\AdminFeedbackController;
use App\Http\Controllers\Admin\AdminSourceController;
 use App\Http\Controllers\Admin\AdminUserController;
 use App\Http\Controllers\Admin\AdminUserToAdmin;
 use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\NewsCategoryController;
use App\Http\Controllers\news\NewsController;
use App\Http\Controllers\news\OneNewsController;
use App\Http\Controllers\Admin\AdminOrderController;
use App\Http\Controllers\OrderController;
 use App\Http\Middleware\IsAdmin;
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

Route::prefix('news')->group(function () {
    Route::get('/category/{category}', [NewsController::class, 'getCategoryNews'])->name('categoryNews');
    Route::get('/{id}', [OneNewsController::class, 'getOneNews'])->name('newsId');
});

Route::resource('/feedback', FeedbackController::class);

Route::resource('/order', OrderController::class);

Route::middleware('auth')->prefix('/admin')->group(function() {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::resource('news', AdminNewsController::class);
    Route::resource('feedbacks', AdminFeedbackController::class);
    Route::resource('orders', AdminOrderController::class);
    Route::resource('category', AdminCategoryController::class);
    Route::resource('source', AdminSourceController::class);
    Route::resource('user', AdminUserController::class);
});

Auth::routes(['register' => false]);

