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

Route::get('/posts', 'PostController@posts')->name('posts');
Route::post('/storePost', 'PostController@store');
Route::post('/changePost', 'PostController@changePost');
Route::get('/aboutUs','AboutUsController@show')->name('aboutUs');
Route::get('/posts/addPost','PostController@addPost')->name('addPost');
Route::get('/posts/{post}','PostController@showPost')->name('showPost');
Route::get('/deletePost/{post}','PostController@deletePost')->name('deletePost');
Route::get('/posts/editPost/{post}','PostController@editPost')->name('editPost');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



