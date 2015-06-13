<?php

class AuthController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function showLogin()
	{
		if (Auth::check())
        {
           // Si tenemos sesión activa mostrará la página de inicio
           return Redirect::to('/');
        }
        // Si no hay sesión activa mostramos el formulario
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
		 $data = [
 		'email' => Input::get('email'),
 		'password' => Input::get('password'),
 		'type' => 'admin',
 		];

 		// Verificamos los datos
 		if (Auth::attempt($data, Input::get('remember')))// Como segundo parámetro pasámos el checkbox para sabes si queremos recordar la contraseña

 		{	
 			 // Si nuestros datos son correctos mostramos la página de inicio
 			 return Redirect::intended('admin');
 		}
 		 // Si los datos no son los correctos volvemos al login y mostramos un error
        return Redirect::back()->with('error_message', 'Invalid data')->withInput();
    }

	public function logOut()
	{
		// Cerramos la sesión
        Auth::logout();
        // Volvemos al login y mostramos un mensaje indicando que se cerró la sesión
        return Redirect::to('lv-login')->with('error_message', 'Logged out correctly');
    }
}