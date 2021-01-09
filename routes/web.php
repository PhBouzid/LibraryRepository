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
    return view('libcontent');
});

Route::post('login', 'LoginController@login');

Route::get('cabinet/{userId}', function ($userId) {

});

Route::prefix('cabinet')->middleware('auth')->group(function(){
    Route::get('deferred/{id}/all', function ($id) {});
    Route::post('deferred/{id}/add',function($id){});
    Route::post('deferred/{id}/cancel',function($id){});
    Route::get('requested/{id}/all', function($id){});
    Route::post('requested/{id}/add',function($id){});
    Route::post('requested/{id}/cancel',function($id){});
    Route::get('downloaded/{id}/all', function($id){});
    Route::get('profile/{id}',function($id){});
    Route::post('profile/{id}/change',function($id){});
});

Route::prefix('librarian')->middleware('auth')->group(function(){
    Route::post('upload',function(){});
    Route::get('uploaded',function(){});
    Route::get('monitoring/all',function(){});
    Route::get('requests/all',function(){});
    Route::get('request/{id}',function(){});
});


