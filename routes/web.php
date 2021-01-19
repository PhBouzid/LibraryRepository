<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MediaTask;
use App\Http\Controllers\UserMediaTask;
use App\Http\Controllers\LibraryTask;
use GuzzleHttp\Middleware;

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

Route::get('/', function(){
    return view('welcome');
});

Route::get('/medias', [MediaTask::class,'getMedia'])->middleware('auth');

Route::get('/books', [MediaTask::class,'showBooks'])->middleware('auth');

Route::get('/videos', [MediaTask::class,'showVideos'])->middleware('auth');

Route::get('/articles', [MediaTask::class,'showArticles'])->middleware('auth');

Route::get('/books/book/{id}',[MediaTask::class,'showBook'])->middleware('auth');

Route::put('/books/book/{id}',[MediaTask::class,'updateBook'])->middleware('auth');

Route::get('/videos/video/{id}',[MediaTask::class,'showVideo'])->middleware('auth');

Route::put('/videos/video/{id}',[MediaTask::class,'updateVideo'])->middleware('auth');

Route::get('/articles/article/{id}',[MediaTask::class,'showArticle'])->middleware('auth');

Route::put('/articles/article/{id}',[MediaTask::class,'updateArticle'])->middleware('auth');

Route::get('/myresource',[UserMediaTask::class,'showResources'])->middleware('auth');

Route::get('/myrecource/get/{id}',[UserMediaTask::class,'getResource'])->middleware('auth');

Route::post('/myresource/add/{id}',[UserMediaTask::class,'addResource'])->middleware('auth');

Route::put('/myresource/cancel/{id}',[UserMediaTask::class,'cancelResource'])->middleware('auth');

Route::get('/library',[LibraryTask::class,'getAllLibrary'])->middleware('auth');

Route::get('/library/get/{id}',[LibraryTask::class,'showLibraryBook'])->middleware('auth');

Route::post('/library/request',[LibraryTask::class,'sendBookRequest'])->middleware('auth');

Route::get('/library/requests',[LibraryTask::class,'showMyRequests'])->middleware('auth');

Route::get('/library/requests/all',[LibraryTask::class,'showAllRequest'])->middleware('auth');

Route::put('/library/request/{id}/approve',[LibraryTask::class,'approveRequest'])->middleware('auth');

Route::put('/library/request/{id}/cancel',[LibraryTask::class,'cancelRequest'])->middleware('auth');

Route::get('/admindashboard', function() {
    return view('admin_dashboard');
})->middleware('auth')->name('admindashboard');

Route::post('/admindashboard',[MediaTask::class,'insertMedia'])->middleware('auth')->name('insertMedia');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

require __DIR__.'/auth.php';
