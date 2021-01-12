<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MediaTask;
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

Route::get('/medias', [MediaTask::class,'getMedia']);

Route::get('/books', [MediaTask::class,'showBooks']);

Route::get('/videos', [MediaTask::class,'showVideos']);

Route::get('/articles', [MediaTask::class,'showArticles']);

Route::get('/books/book/{id}',[MediaTask::class,'showBook']);

Route::put('/books/book/{id}',[MediaTask::class,'updateBook']);

Route::get('/videos/video/{id}',[MediaTask::class,'showVideo']);

Route::put('/videos/video/{id}',[MediaTask::class,'updateVideo']);

Route::get('/articles/article/{id}',[MediaTask::class,'showArticle']);

Route::put('/articles/article/{id}',[MediaTask::class,'updateArticle']);

Route::get('/myresource',[UserMediaTask::class,'showResources']);

Route::get('/myrecource/get/{id}',[UserMediaTask::class,'getResource']);

Route::post('/myresource/add',[UserMediaTask::class,'addResource']);

Route::put('/myresource/cancel',[UserMediaTask::class,'cancelResource']);

Route::get('/library',[LibraryTask::class,'getAllLibrary']);

Route::get('/library/get/{id}',[LibraryTask::class,'showLibraryBook']);

Route::post('/library/request',[LibraryTask::class,'sendBookRequest']);

Route::get('/library/requests',[LibraryTask::class,'showMyRequests']);

Route::get('/library/requests/all',[LibraryTask::class,'showAllRequest']);

Route::put('/library/request/{id}/approve',[LibraryTask::class,'approveRequest']);

Route::put('/library/request/{id}/cancel',[LibraryTask::class,'cancelRequest']);


Route::get('/admindashboard', function() {
    return view('admin_dashboard');
})->Middleware(['auth'])->name('admin_dashboard');

Route::post('/admindashboard',[AdminTask::class,'upload']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->Middleware(['auth'])->name('dashboard');



require __DIR__.'/auth.php';
