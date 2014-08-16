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

Route::get('admin/login','SessionsController@create');

Route::get('admin/logout','SessionsController@destroy');


Route::resource('admin/sessions', 'SessionsController', array('only' => array('index', 'store', 'create')));

Route::group(['prefix' => 'admin', 'before'=>'auth'], function() {

    Route::get('/', function(){
        return 'Admin Home';
    });

    Route::resource('sessions', 'SessionsController', array('except' => array('index', 'store', 'create')));

    Route::resource('posts', 'PostsController');

    Route::resource('projects', 'ProjectsController');
});

Route::resource('posts', 'PostsController', array('only' => array('index', 'show')));

Route::resource('projects', 'ProjectsController', array('only' => array('index', 'show')));
