<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\ContactUsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Auth;

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

Route::resource('/', IndexController::class);
Route::resource('/contact-us', ContactUsController::class);

Route::get('/blog', function () {
    return view('blog');
});

// Admin
Auth::routes();
Route::middleware(['auth'])->prefix('admin-area')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::resource('/admin-contact-us', ContactController::class);
    Route::resource('/admin-about-us', AboutController::class);
});
