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

Route::get('/', function () {
    return view('main.home');
});
//
//Route::get('/index', )
//
//Route::get('/index', function () {
//    return view("layout.index");
//});
//Route::resource('/index', \App\Http\Controllers\IndexController::class);
//Route::post('/save-inmate', "\App\Http\Controllers\InmatesController::class@store");
//Route::get('/viewBooks', \App\Http\Controllers\IndexController::class, 'viewBooks')->name('viewBooks');
Route::get('/blog/{id}', [\App\Http\Controllers\BlogController::class, 'show']);

Route::post('/save-book', [\App\Http\Controllers\BooksController::class, 'store']);

Route::post('/storeBlog', [\App\Http\Controllers\BlogController::class, 'store']);

Route::post('/store', [\App\Http\Controllers\SocialistController::class, 'store']);

Route::get('/read/{id}', [\App\Http\Controllers\SocialistController::class, 'read'])->name('read');

Route::get('/index', [\App\Http\Controllers\IndexController::class, 'index'])->name('index');

Route::get('/theKenyaSocialist', [\App\Http\Controllers\IndexController::class, 'theKenyaSocialist'])->name('theKenyaSocialist');

Route::get('/catalogue', [\App\Http\Controllers\IndexController::class, 'catalogue'])->name('catalogue');

Route::get('/media', [\App\Http\Controllers\IndexController::class, 'media'])->name('media');

Route::get('/blog', [\App\Http\Controllers\IndexController::class, 'blog'])->name('blog');

Route::get('/about', [\App\Http\Controllers\IndexController::class, 'about'])->name('about');

Route::get('/projects', [\App\Http\Controllers\IndexController::class, 'projects'])->name('projects');

Route::get('/admin', [\App\Http\Controllers\IndexController::class, 'admin'])->name('admin');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
