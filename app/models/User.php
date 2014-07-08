<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

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
	protected $hidden = array('password', 'remember_token');

        protected $fillable = array('first_name', 'email', 'password', 'last_name');
        
        public static $rules = array(
         'first_name'=>'alpha_num|max:50',
         'last_name'=>'alpha_num|max:50',
         'email'=>'required|unique:users,email|email',
         'password'=>'required|alpha_num|between:6,15|confirmed',
         'password_confirmation'=>'required|alpha_num|between:6,15',
            
        );
}
