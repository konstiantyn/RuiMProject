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

Route::get('/', function () {return view('index');})->name('name_index');
Route::get('url_homepage', function(){return view('index');});
Route::get('url_editplaylist', function(){return view('edit-playlist');});
Route::get('url_createplaylist', function(){return view('create-playlist');});
Route::get('url_projectlist', function(){return view('project-list');});
Route::get('url_logooverlay', function(){return view('logo-overlay');});
Route::get('url_playlistmsg', function(){return view('playlist-messages');});
Route::get('url_login', function(){return view('login');})->name('name_login');
Route::get('url_signup', function(){return view('signup');});
Route::get('url_viewvideo', 'MainController@Viewvideofunc');
Route::get('url_createmessage', function(){return view('create-message');});
Route::get('url_editmessage', function(){return view('edit-message');});
Route::get('url_createvideoclip', function(){return view('create-video-clip');});

Route::post('url_signupaction', 'MainController@Singupfunc');
Route::post('url_loginaction', 'MainController@Loginfunc');
Route::post('url_createmsgaction', 'MainController@CreateMsgfunc');