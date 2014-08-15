<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

    public $timestamps = false;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');//, 'remember_token');

    protected $fillable = ['email','password','firstName','lastName','lastLogin'];

    // Add your validation rules here
    public static $rules = [
        'email' => 'required,email',
        'password' => 'required',
        'fistName' => 'required',
        'lastName' => 'required',
        'lastLogin' => 'required'
    ];

}
