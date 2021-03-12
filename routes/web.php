<?php

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

Route::get('/top','TopController@top');

Route::get('create','PostController@create')->name('create')->middleware('auth');


Route::post('bbb','PostController@store')->name('bbb')->middleware('auth');

Route::get('mypage','MypageController@mypage')->name('mypage');

Route::get('top','TopController@top')->name('top');

Route::get('edit','MypageController@edit')->name('edit');

Auth::routes();

Route::get('/home', 'TopController@top')->name('home');

Route::get('/post/like/{id}','PostController@like')->name('post.like');
Route::get('/post/unlike/{id}','PostController@unlike')->name('post.unlike');


