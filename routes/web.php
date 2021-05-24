<?php
use App\Http\Controllers\pruebaController;
use App\Http\Controllers\registrationController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

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
//Auth::routes();
Route::view('/', 'index')->name('index');
Route::view('/welcome', 'welcome')->name('welcome');




//Route::post('register', [registrationController::class, 'index'])->name('register');

// Route::get('/login', [registrationController::class, 'create']);
// Route::post('/login', [registrationController::class, 'store']);
// Route::get('/logout', [registrationController::class, 'destroy']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/shop', [ShopController::class, 'index'])->name('shop');

Route::post('/shop/productDetail',[ShopController::class, 'getProducto'])->name('productDetail');

/* Blog */ 
Route::get('/blog', [BlogController::class, 'index']);
Route::post('/blog/detail', [BlogController::class, 'getEntrada'])->name('blogDetail');
Route::post('/getCat', [BlogController::class, 'ajaxRequest'])->name('getCat');