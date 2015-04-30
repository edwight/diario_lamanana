<?php

class AuthController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function login()
	{
		//login
		return View::make('auth.login');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function postLogin()
	{	
		//
		 $credentials = array(
 		'email' => Input::get('email'),
 		'password' => Input::get('password')
 		);
 		
		try
	 	{	
	 		//return $credentials;
		 	$user = Sentry::authenticate($credentials, false);
		 	if($user)
			 {	
			 	//return $user;
			 	return Redirect::to('admin');
			 }
	 	}
	 	catch(\Exception $e)
	 	{
		 	return Redirect::to('login')
		 	->withErrors(array('login' => $e->getMessage()));
		}
	}
	public function logout()
	{
		//logout
		Sentry::logout();
		return Redirect::to('/');
	}
}