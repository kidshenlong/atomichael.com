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

/*Route::get('/', function(){
	//return View::make('hello');
    //dd(App::environment());
    //return getenv('test');
    $date = new \DateTime;
    User::create([
        'email' => 'michaelpm91@googlemail.com',
        'firstName' => 'Michael',
        'lastName' => 'Patterson-Muir',
        'password' => Hash::make('secret'),
        'lastLogin' => $date
    ]);

    return 'Done';
});*/

Route::group(['prefix' => 'admin'], function() {
    Route::get('/', function(){
        //return Redirect::to('admin/login');
        return 'Admin Home';
    })->before('auth');

    Route::get('login','SessionsController@create');

    Route::get('logout','SessionsController@destroy');

    Route::resource('sessions', 'SessionsController');
});

Route::resource('posts', 'PostsController');

Route::resource('projects', 'ProjectsController');
