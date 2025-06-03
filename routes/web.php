<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\FluentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
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
*/

Route::get('/', [ProductController::class, 'index'])->name('product.index');

Route::get('/home/{name?}/',[HomeController::class, 'index'])->name('home.index');

Route::get('/user', [UserController::class, 'index'])->name('user.index');

Route::get('/posts', [ClientController::class, 'getAllPost'])->name('posts.getallpost');

Route::get('/posts/{id}', [ClientController::class, 'getPostById'])->name('posts.getpostbyid');

Route::get('/add-post', [ClientController::class, 'addPost'])->name('posts.addpost');

Route::get('/update-post', [ClientController::class, 'updatePost'])->name('posts.updatepost');

Route::get('/delete-post/{id}', [ClientController::class, 'deletePost'])->name('posts.deletepost');

Route::get('/fluent-strings', [FluentController::class, 'index'])->name('fluent.index');

Route::get('/login', [LoginController::class, 'index'])->name('login.index')->middleware('checkuser');

Route::post('/login', [LoginController::class, 'loginSubmit'])->name('login.submit');

Route::get('/session/get', [SessionController::class, 'getSessionData'])->name('session.get');

Route::get('/session/set', [SessionController::class, 'storeSessionData'])->name('session.set');

Route::get('/session/remove', [SessionController::class, 'deleteSessionData'])->name('session.delete');

Route::get('/posts', [PostController::class, 'getAllPosts'])->name('posts.getallpost');

Route::get('/add-post', [PostController::class, 'addPost'])->name('posts.add');

Route::post('/add-post', [PostController::class, 'addPostSubmit'])->name('posts.addsubmit');

Route::get('/posts/{id}', [PostController::class, 'getPostById'])->name('posts.getpostbyid');

Route::delete('/delete-post/{id}', [PostController::class, 'deletePost'])->name('posts.delete');

Route::get('/edit-post/{id}', [PostController::class, 'editPost'])->name('posts.edit');

Route::post('/update-post', [PostController::class, 'editPostSubmit'])->name('posts.update');

Route::get('/inner-join', [PostController::class, 'innerJoinClause'])->name('posts.innerjoin');

Route::get('/left-join', [PostController::class, 'leftJoinClause'])->name('posts.leftjoin');