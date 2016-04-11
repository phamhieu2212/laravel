<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent
{
	public $table = 'users';
	public $timestamps = false;

	//
	public static function check_login($username, $password)
	{
		$check = User::where('username', '=', $username)->where('password', '=', $password)->count();
		if ($check > 0) {
			return true;
		} else {
			return false;
		}
	}

	//

	public static function register($username, $password)
	{


			$check = User::where('username', '=', $username)->count();
			if ($check > 0) {
				return false;
			} else {
				User::insert(
					['username' => $username, 'password' => $password]
				);
				return true;
			}

		}
	}


