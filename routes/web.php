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

Route::get('/posts', 'PostController@index')->name('posts');
Route::get('/', 'PostController@index')->name('posts');
Route::get('/create', 'PostController@create')->name('create');
Route::post("Create/check","PostController@store")->name('post.store');
Route::get('posts/{id}', "PostController@show")->name('post.show');
Route::get('/posts/{id}/edit', 'PostController@edit')->name('posts.edit');
Route::put('/posts/{id}', 'PostController@update')->name('posts.update');
Route::delete   ('/posts/{id}/destroy', 'PostController@destroy')->name('posts.destroy');//Route::post('/comments', function (){
Auth::routes();
Route::get('/user', 'UserController@index')->name('user');
Route::get('/admin', 'AdminController@index')->name('admin');

//Route::group(['middleware' => ['role:admin']], function () {
//});
//Route::group(['middleware' => ['role:admin']], '/');

