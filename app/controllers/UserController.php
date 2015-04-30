<?php

class UserController extends \BaseController {


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{	
		//lista de usuario
		$user=User::all();
		//$user = Sentry::findAllUsers();
		//return Sentry::getUser();
		return View::make('user.index', array('user'=>$user));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// si usiario tiene permiso de admin entonces Sentry::getUser()->id;
			// Feel free to pass a string for just one permission instead
			//$users = Sentry::findAllUsersWithAccess(array('admin', 'other'));
		//nuevo usuario
		//lista de usuario
		return View::make('user.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		try
		{
		    // Create the user
		    
		    //$id = Sentry::getUser()->id;
		    //return $id;
		    //$user = User::find($id);
		    
		    //return $user = Sentry::getUser();
		    $user = Sentry::createUser(array(
		    	'first_name'  => Input::get('first_name'),
		    	'last_name'   => Input::get('last_name'),
		        'email'       => Input::get('email'),
		        'password'    => Input::get('password'),
		        'activated'   => true,
		        'permissions' => array(
		            'admin'   =>  Input::get('admin'),
		            'editor'  => Input::get('editor'),
		            'user'    => Input::get('user'),
		        ),
		    )); 
		    $file = Input::file("photos");
		    $fileName = $file->getClientOriginalName();

		    $perfil = new Perfil;
		    $perfil->photo = $fileName;
		    $user->perfil()->save($perfil);
		    if($perfil->save())
		    {
		    	$file->move('public/imgs/user', $fileName);
		    } 
		    return Redirect::to('admin/users');
		}
		catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
		{
		    echo 'Login field is required.';
		}
		catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
		{
		    echo 'Password field is required.';
		}
		catch (Cartalyst\Sentry\Users\UserExistsException $e)
		{
		    echo 'User with this login already exists.';
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//detalles del usuario 
		$user = User::find($id);
		return View::make('user.show')->with('user', $user);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{

		//modificar usuario users/1/edit
		$user = User::find($id);
		return View::make('user.edit')->with('user', $user);

	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//validacion 
		//store 
        $user = User::find($id);
        $post->titulo = Input::get('titulo');
        $post->contenido = Input::get('contenido');
        $post->save();

        // redirect
        Session::flash('message', 'Successfully updated!');
        //si validacion es incorrecta
        //return Redirect::route('admin.edit', $id)->withInput();
        return Redirect::to('users');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//eliminar usuario 
		$user = User::find($id);
		$filename = public_path().'public/imgs/user/'.$user->perfil->photo;

		if (File::exists($filename)) 
		{
    		File::delete($filename);
    		User::destroy($id);
    		return Redirect::to('admin/users');
		}
		else{
				return Redirect::to('admin/users') ->withErrors('no se pudo eliminar usuario');
			}
	}


}


