<?php

class HomeController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	public function showLogin()
	{
		// show the form
		return View::make('login');
	}

	public function doLogin()
	{

		$rules = array(
			'username'    => 'required',
			'password' => 'required|min:3',

		);


		$validator = Validator::make(Input::all(), $rules);


		if ($validator->fails()) {
			return Redirect::to('login')
				->withErrors($validator);

		} else {

			if(User::check_login(Input::get('username'),Input::get('password'))){
				Session::put('user',Input::get('username'));
				echo "ok";
			}
			else{echo 'Đăng nhập thất bại';}


		}
	}


	public function showRegister()
	{
		// show the form
		return View::make('register');
	}


	public function doRegister(){
		$rules = array(
			'username' =>'required',
			'password' => 'required|min:3'
		);

		$validator = Validator::make(Input::all(),$rules);

		if($validator->fails()){
			return Redirect::to('register')
				->withErrors($validator);

		}
		else{
			$user = new User();
			$user->username = Input::get('username');
			$user->password = Input::get('password');
			$user->save();
			$a = "Success!";
			return View::make('login',compact('a'));

		}
	}

	public function doLogout(){
		Session::forget('user');
		return Redirect::to('login');
	}



}
