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

Route::get('/', 'HomeController@index')->name('home');
// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/connections', 'ConnectionsController@index')->name('connections.index');
Route::get('/messages', 'MessagesController@index')->name('messages.index');
Route::get('/profile', 'ProfileController@index')->name('profile.index')->middleware('auth');
Route::get('/profile/{user}', 'ProfileController@show')->name('profile.show');
Route::post('/follow', 'FollowController@follow')->name('follow');
Route::post('/unfollow', 'FollowController@unfollow')->name('unfollow');

Route::get('/p/create', 'PostsController@create')->name('post.create')->middleware('auth');
Route::post('/p', 'PostsController@store');

Route::get('/users/list', 'IndexController2@users');

Auth::routes();


Route::get('/welcome', 'IndexController@index')->middleware('auth');
Route::get('/welcome/{username}', 'IndexController@show');
