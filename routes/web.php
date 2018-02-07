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

Route::get('/', 'PostsController@index');
Route::get('/posts/create', 'BlogsController@create');
Route::post('/post', 'BlogsController@store');
Route::get('/posts/{postid}', 'BlogsController@show');
Route::post('/posts/{postid}/comment', 'CommentsController@store');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionController@create')->name('login');
Route::post('/login', 'SessionController@store');

Route::get('/logout', 'SessionController@destroy');


Route::get('tasks', 'TasksController@index');
Route::get('tasks/{taskid}', 'TasksController@show');
Route::get('/blog', 'BlogsController@index')->name('home');
Route::get('/home', 'BlogsController@index');


