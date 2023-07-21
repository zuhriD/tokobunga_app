<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('guest')->group(function () {
    Route::get('/login', [App\Http\Controllers\Auth\AuthController::class, 'index_login'])->name('login');
    Route::post('/login', [App\Http\Controllers\Auth\AuthController::class, 'login'])->name('auths.login');
});

Route::get('/register', [App\Http\Controllers\Auth\AuthController::class, 'index_register'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\AuthController::class, 'register'])->name('auths.register');

Route::resource('users', App\Http\Controllers\UserController::class);
Route::resource('orders', App\Http\Controllers\OrderController::class);
Route::get('/profile', [App\Http\Controllers\UserController::class, 'show_profile'])->name('profile');
Route::get('/history', [App\Http\Controllers\OrderController::class, 'show_history'])->name('history');

Route::get('/aboutUs', [App\Http\Controllers\HomeController::class, 'about'])->name('aboutUs');
Route::get('/ourBrand', [App\Http\Controllers\HomeController::class, 'ourbrand'])->name('ourbrand');
Route::get('/ourBrand/{id}', [App\Http\Controllers\HomeController::class, 'show_brand'])->name('show_brand');


Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboardAdmin');
    Route::resource('categories', App\Http\Controllers\CategoryController::class);
    Route::resource('products', App\Http\Controllers\ProductController::class);
    Route::post('/logout', [App\Http\Controllers\Auth\AuthController::class, 'logout'])->name('auths.logout');
});

Route::group(['middleware' => ['auth', 'user']], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('homeUser');
    Route::get('/product/{product}', [App\Http\Controllers\ProductController::class, 'show_product'])->name('show_product');
    Route::get('/checkout/{product}', [App\Http\Controllers\OrderController::class, 'create_order'])->name('create_order');
    Route::post('/checkout', [App\Http\Controllers\OrderController::class, 'store_order'])->name('store_order');
    Route::get('/logout', [App\Http\Controllers\Auth\AuthController::class, 'logout'])->name('auths.logout');
});
