<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::group(['before'=>'auth'], function() {
    Route::resource('admin','AdminController', array('only' => array('index')));
    Route::get('admin/logout','AdminSessionsController@destroy');

    Route::resource('admin/sessions', 'AdminSessionsController', array('except' => array('index', 'store', 'create')));

    Route::resource('admin/posts', 'AdminPostsController');

    Route::resource('admin/projects', 'AdminProjectsController');
});

Route::get('admin/login','AdminSessionsController@create');

Route::resource('admin/sessions', 'AdminSessionsController', array('only' => array('index', 'store', 'create')));

Route::resource('posts', 'PostsController', array('only' => array('index', 'show')));

Route::resource('projects', 'ProjectsController', array('only' => array('index', 'show')));

