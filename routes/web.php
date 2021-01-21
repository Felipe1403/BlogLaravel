<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

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


Route::get('/categories',[CategoryController::class,'index'])->name('category.index');
Route::get('/categories/{id}',[CategoryController::class,'show'])->name('category.show');
// Route::resource('categories', CategoryController::class)->only([
//     'index', 'show'
// ]);


Route::get('/posts',[PostController::class,'index'])->name('post.index');
Route::get('/posts/{id}',[PostController::class,'show'])->name('post.show');

Route::post('/comments',[CommentController::class,'store'])->name('comment.create');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::delete('/comments/{id}/delete',[CommentController::class,'delete'])->name('comment.delete');

/* Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard'); */

