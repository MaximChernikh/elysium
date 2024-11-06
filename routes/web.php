<?php

use App\Http\Controllers\AccountController;
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
    return view('welcome');
});

//Accounts

Route::get('/account', [App\Http\Controllers\AccountController::class, 'index'])
    ->name('account')
    ->middleware('auth');


Route::post('/account/update/{id}', [AccountController::class, 'update'])
    ->name('account-update')
    ->middleware('auth');


//Articles

Route::get('/articles/{id}', [App\Http\Controllers\ArticleController::class, 'index'])
    ->name('article');

Route::get('/myArticles/{id}', [App\Http\Controllers\ArticleController::class, 'myArticle'])
    ->name('my-article');

Route::get('/creatingArticle', [App\Http\Controllers\ArticleController::class, 'creatingArticle'])
    ->name('article-create')
    ->middleware('auth');

Route::post('/article/submit', [App\Http\Controllers\ArticleController::class, 'create'])
    ->name('article-submit')
    ->middleware('auth');

Route::post('/myArticle/update/{id}', [App\Http\Controllers\ArticleController::class, 'update'])
    ->name('my-article-update')
    ->middleware('auth');

Route::get('/articles', [App\Http\Controllers\ArticleController::class, 'allArticles'])
    ->name('articles');

Route::get('/myArticles', [App\Http\Controllers\ArticleController::class, 'showMyArticles'])
    ->name('my-articles');

//Comments

Route::post('/comment/submit/{article_id}', [App\Http\Controllers\CommentController::class, 'create'])
    ->name('comment-submit');

Route::get('/comments', [App\Http\Controllers\CommentController::class, 'allComments'])
    ->name('comments');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/message', [App\Http\Controllers\HomeController::class, 'showMessage'])
    ->name('message');
