<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Route::get('/', 'TopController@index');

Auth::routes(['reset'=> false,]);

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/create', 'CreatePostController@index');
Route::post('/create', 'CreatePostController@create');

Route::get('/post/{id}', 'PostController@index');
Route::post('/comment', 'CommentsController@put');

Route::post('/edit{id}', 'CommentsController@edit');
Route::post('/edit', 'CommentsController@update');



Route::post('/delete', 'PostController@delete');






