<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MediaTask;
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

Route::get('/', [MediaTask::class,'getMedia']);

Route::get('/books', [MediaTask::class,'showBooks']);

Route::get('/videos', [MediaTask::class,'showVideos']);

Route::get('/articles', [MediaTask::class,'showArticles']);

Route::get('/books/book/{id}',[MediaTask::class,'showBook']);

Route::get('/videos/video/{id}',[MediaTask::class,'showVideo']);

Route::get('/articles/article/{id}',[MediaTask::class,'showVideo']);

Route::get('/myresource',[MediaTask::class,'myresource']);

Route::get('')

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



require __DIR__.'/auth.php';
