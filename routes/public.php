<?php

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Post;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('posts/{post}', [ //Modo usando un controlador
    'as'=> 'posts.show',
    'uses'=> 'PostsController@show',
])->where('post', '\d+');

//Route::get('posts/{post}', function(Post $post) { //Modo sin usar un controlador
//    return view('posts.show', compact('post'));
//})->name('posts.show');

