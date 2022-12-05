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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'App\Http\Controllers\WelcomeController@index')->name('welcome');
Route::get('home/detail/{id}', 'App\Http\Controllers\WelcomeController@show')->name('detail');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('post/blog', 'App\Http\Controllers\PostController@index')->name('post.index');
Route::get('post/create', 'App\Http\Controllers\PostController@create')->name('post.create');
Route::post('post/store', 'App\Http\Controllers\PostController@store')->name('post.store');
Route::get('post/edit/{id}', 'App\Http\Controllers\PostController@edit')->name('post.edit');
Route::post('post/update/{id}', 'App\Http\Controllers\PostController@update')->name('post.update');
Route::get('post/delete/{id}', 'App\Http\Controllers\PostController@destroy')->name('post.delete');
Route::post('image/store','App\Http\Controllers\PostController@store')->name('image.store');

Route::get('contactus', 'App\Http\Controllers\ContactController@index')->name('contact.us');
Route::post('contact/store', 'App\Http\Controllers\ContactController@store')->name('contact.store');
