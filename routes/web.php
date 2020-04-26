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

Route::get('/', function () {
    // return view('home');

    $user = factory(\App\User::class)->create();
    $post = new App\Post([
        'title' => 'Title here',
        'body' => 'body here',
        'user_id' => $user->id,
    ]);

    $post->save();

    dd($post);
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/connections', 'FriendsController@index')->name('friends');
Route::get('/messages', 'MessagesController@index')->name('messages');
Route::get('/profile', 'ProfileController@index')->name('profile');

Auth::routes();

Route::resource('posts', 'PostsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
