<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Auth;
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
//Route::get('/contact-us', [ContactController::class, 'index']);

Route::post('/addCart/{id}', [\App\Http\Controllers\BooksController::class, 'addCart'])->name('addCart');
Route::get('/showCart', [\App\Http\Controllers\BooksController::class, 'showCart'])->name('showCart');
Route::get('/deleteItem/{id}', [\App\Http\Controllers\BooksController::class, 'deleteItem'])->name('deleteItem');
Route::post('/order', [\App\Http\Controllers\BooksController::class, 'order'])->name('order');
Route::get('/read/{id}', [\App\Http\Controllers\SocialistController::class, 'read'])->name('read');
Route::get('/index', [\App\Http\Controllers\IndexController::class, 'index'])->name('index');
Route::get('/theKenyaSocialist', [\App\Http\Controllers\IndexController::class, 'theKenyaSocialist'])->name('theKenyaSocialist');
Route::get('/catalogue', [\App\Http\Controllers\IndexController::class, 'catalogue'])->name('catalogue');
Route::get('/singleprojects/{id}', [\App\Http\Controllers\ProjectsController::class, 'singleprojects'])->name('singleprojects');
Route::get('/singlemedia/{id}', [\App\Http\Controllers\MediaController::class, 'singlemedia'])->name('singlemedia');
Route::get('/media', [\App\Http\Controllers\IndexController::class, 'media'])->name('media');
Route::get('/blog', [\App\Http\Controllers\IndexController::class, 'blog'])->name('blog');
Route::get('/about', [\App\Http\Controllers\IndexController::class, 'about'])->name('about');
Route::get('/projects', [\App\Http\Controllers\IndexController::class, 'projects'])->name('projects');
Route::post('/contactUs', [ContactController::class, 'contactUs'])->name('contactUs');
Route::get('/blog/{id}', [\App\Http\Controllers\BlogController::class, 'show']);
Route::post('comments', [CommentController::class, 'store'])->name('comments.store');


Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/admin', [\App\Http\Controllers\IndexController::class, 'admin'])->name('admin');
    Route::post('/save-book', [\App\Http\Controllers\BooksController::class, 'store']);
    Route::post('/save-project', [\App\Http\Controllers\ProjectsController::class, 'store']);
    Route::post('/save-media', [\App\Http\Controllers\MediaController::class, 'store']);
    Route::post('/save-gallery', [\App\Http\Controllers\GalleryController::class, 'store']);
    Route::post('/storeBlog', [\App\Http\Controllers\BlogController::class, 'store']);
    Route::post('/store', [\App\Http\Controllers\SocialistController::class, 'store']);
});
Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//comments stuff

//Route::resource('posts', PostController::class);
//
//Route::get('allPosts', [PostController::class, 'allPosts'])->name('allPosts');;

