<?php

use App\Http\Controllers\PostController;
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
| personal-site.com => welcome
| personal-site.com/contact => contact
| personal-site.com/blog => blog
| personal-site.com/about => about
|
*/

Route::view('/', 'welcome')->name('home');
Route::view('contact', 'contact')->name('contact');
Route::get('blog', [PostController::class, 'index'])->name('blog');
Route::view('about', 'about')->name('about');
