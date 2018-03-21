<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () { return view('index'); })->name('name_index');
Route::get('url_homepage', function(){return view('index');});
Route::get('url_editplaylist', function(){return view('edit-playlist');});
Route::get('url_createplaylist', function(){return view('create-playlist');});
Route::get('url_projectlist', function(){return view('project-list');});
Route::get('url_logooverlay', function(){return view('logo-overlay');});
Route::get('url_playlistmsg', function(){return view('playlist-messages');});
Route::get('url_login', function(){return view('login');})->name('name_login');
Route::get('url_signup', function(){return view('signup');});

Route::post('url_signupaction', 'MainController@Singupfunc');
Route::post('url_loginaction', 'MainController@Loginfunc');
