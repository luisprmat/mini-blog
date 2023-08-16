<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
| personal-site.com => welcome
| personal-site.com/contact => contact
| personal-site.com/blog => blog
| personal-site.com/about => about
|
*/

Route::view('/', 'welcome')->name('home');
Route::view('contact', 'contact')->name('contact');

Route::resource('blog', PostController::class)
    ->names('posts')
    ->parameters(['blog' => 'post']);

Route::view('about', 'about')->name('about');

Route::view('login', 'auth.login')->name('login');
Route::post('login', [AuthenticatedSessionController::class, 'store']);
Route::redirect('logout', 'login', 301);
Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::view('register', 'auth.register')->name('register');
Route::post('register', [RegisteredUserController::class, 'store']);
