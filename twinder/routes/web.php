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

Route::get('/usuaris', function() {
  $users = App\User::all();
  return view('llista_usuaris',['users'=>$users]);
});

Route::get('/postDida', function() {
  $post = App\Post::find(rand(1,100));
  return view('postDida',['post'=>$post]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
