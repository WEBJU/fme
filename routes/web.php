<?php

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about']);
Route::get('/categories', [App\Http\Controllers\HomeController::class, 'categories']);
Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog']);
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact']);
Route::get('/gamers', [App\Http\Controllers\GamerController::class, 'index']);

Route::get('/leagues',[App\Http\Controllers\GamerController::class, 'leagues']);
Route::get('/gamers-forum',[App\Http\Controllers\GamerController::class, 'forum']);

Route::post('/signin', [App\Http\Controllers\AuthController::class, 'login'])->name('signin');
Route::get('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

Route::get('/gallery', [App\Http\Controllers\GalleryController::class, 'index']);

Route::view('home', 'home')->middleware('auth');
//event routes
Route::view('events/create','events.index');
Route::post('/create-event',[App\Http\Controllers\EventController::class, 'store'])->name('create.post')->middleware('auth');
Route::get('/admin',[App\Http\Controllers\AdminController::class, 'index'])->name('dashboard');
Route::get('/show-event',[App\Http\Controllers\EventController::class, 'index'])->name('events.display');
Route::view('events','sports');
Route::get('events/{id}',[App\Http\Controllers\EventController::class, 'singleEvent'])->name('events.show');
Route::get('event/{eventId}',[App\Http\Controllers\EventController::class, 'show'])->name('events.single');
Route::post('book',[App\Http\Controllers\TicketController::class, 'store']);
// Route::get('')
//common routes
Route::get('/admin',[App\Http\Controllers\AdminController::class, 'index'])->name('dashboard');

Route::get('/profile', [App\Http\Controllers\UserController::class, 'index']);
Route::get('/home-edit', [App\Http\Controllers\AdminController::class, 'home_edit']);
Route::get('/gallery-edit', [App\Http\Controllers\AdminController::class, 'gallery']);
Route::post('/create-account',[App\Http\Controllers\AuthController::class, 'createUserAccount'])->name('register.post');
Route::post('/loginUser',[App\Http\Controllers\AuthController::class, 'loginUser'])->name('login.post');
Route::post('/edit-section', [App\Http\Controllers\SectionController::class, 'update'])->name('edit-section');
// Route::get('/login',[App\Http\Controllers\AdminController::class,'profile']);
