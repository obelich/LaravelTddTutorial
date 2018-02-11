<?php

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/posts/create', ['uses'=> 'CreatePostsController@create', 'as'=>'posts.create']);
Route::post('/posts/create', ['uses'=> 'CreatePostsController@store', 'as'=>'posts.store']);