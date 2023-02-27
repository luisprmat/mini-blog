<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\RegisteredUserController;

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

Route::get('login', function () {
    return 'Login page';
})->name('login');

Route::view('register', 'auth.register')->name('register');
Route::post('register', [RegisteredUserController::class, 'store']);
