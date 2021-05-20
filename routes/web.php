<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImagesController;
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
Route::get('/',     'PostController@index')->name('posts');
Route::get('/create', 'PostController@create')->name('create');
Route::get('posts/{id}', "PostController@show")->name('post.show');
Auth::routes();
// Admin Controllers
Route::get('/admin-page','AdminController@index')->name('admin');
Route::get('/user','UserController@index')->name('user');
Route::get('/home','UserController@index')->name('user');
Route::get('edit/{id}','UserController@edit')->name('user.edit');

Route::put('update/{id}','UserController@update')->name('user.update');
Route::get('user/{id}/albums', 'UserController@albums')->name('user.albums');
Route::post('user/{id}/create/albums', 'UserController@storeAlbums')->name('user.create.albums');
Route::delete('user/album/image/destroy/{id}','ImagesController@destroy' )->name('user.destroy.image');
Route::post('/user/create/image/{id}', 'ImagesController@store')->name('user.create.image');

Route::delete('user/destroy/albums/{id}', 'UserController@destroyAlbum')->name('user.destroy.albums');
Route::get('user/show/albums/{id}', 'ImagesController@index')->name('user.show.albums');


Route::get('/posts-table','AdminController@posts')->name('post-table');
Route::get('/post/{id}/edit', 'AdminController@edit')->name('post.edit');
Route::put('/post/{id}', 'AdminController@update')->name('post.update');
Route::delete('/post/{id}/', 'AdminController@destroy')->name('post.destroy');
Route::post('/create-category', 'AdminController@storeCategory')->name('create-category');
Route::get('/create', 'AdminController@create')->name('create');
Route::get('/category', 'AdminController@categories')->name('category');
Route::post("create-post","AdminController@store")->name('post.store');

//Route::middleware(['role:admin'])->prefix('admin_panel')->group(function () {
//    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('homeAdmin'); // /admin
//
////    Route::resource('category', CategoryController::class);
////    Route::resour   ce('post', PostController::class);
//});
