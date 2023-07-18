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

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboardAdmin');
    Route::resource('users', App\Http\Controllers\UserController::class);
    Route::resource('categories', App\Http\Controllers\CategoryController::class);
    Route::resource('products', App\Http\Controllers\ProductController::class);
    Route::resource('orders', App\Http\Controllers\OrderController::class);
    Route::post('/logout', [App\Http\Controllers\Auth\AuthController::class, 'logout'])->name('auths.logout');
});

Route::group(['middleware' => ['auth', 'user']], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('homeUser');
    Route::post('/logout', [App\Http\Controllers\Auth\AuthController::class, 'logout'])->name('auths.logout');
});
