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


// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/connections', 'ConnectionsController@index')->name('connections.index');
Route::get('/messages', 'MessagesController@index')->name('messages.index');
Route::get('/profile', 'ProfileController@index')->name('profile.index')->middleware('auth');

Route::get('/p/create', 'PostsController@create')->name('post.create')->middleware('auth');
Route::post('/p', 'PostsController@store');

Route::get('/users/list', 'IndexController2@users');
Route::get('/follower', 'IndexController2@index')->name('follower');
Route::post('/follow', 'FollowerController@follow')->name('follow');
Route::post('/unfollow', 'FollowerController@unfollow')->name('unfollow');


Auth::routes();


Route::get('/welcome', 'IndexController@index')->middleware('auth');
Route::post('follow/{user}', 'FollowsController@store');
Route::get('/profile/{user}', 'ProfileController@show')->name('profile.show');
Route::get('/welcome/{username}', 'IndexController@show');
Route::get('/', 'HomeController@index')->name('home');
Route::get('user/follower/{username}', 'HomeController@show');

