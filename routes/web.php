<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [DashboardController::class, 'index'])->name('home');
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
    Route::resource('categories', CategoryController::class);
});

//prevent user from accessing the login page if they are already logged in
Route::get('/login', function () {
    if (auth()->check()) {
        return redirect()->route('home');
    }
    return view('pages.auth.login');
})->name('login');
