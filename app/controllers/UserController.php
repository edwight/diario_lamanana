<?php

class UserController extends \BaseController {


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{	
		$name = Input::get('name');
		//$user = User::name($name);
		//lista de usuario
		$user=User::all();
		//$user = Sentry::findAllUsers();
		//return Sentry::getUser();
		return View::make('admin.user.index', array('user'=>$user));
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
		return View::make('admin.user.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$user = New User();
		$nombre = Input::get('nombre');
		$user->name = $nombre;
		$user->slugUser = Str::slug($nombre);
		$user->email = Input::get('email');
		$user->password = Input::get('password');
		$user->type = Input::get('type');
		$user->save();

		$photo = Input::file('photo');
		if (!empty($photo))
		{
			$fileName = $photo->getClientOriginalName();
			$filename = Str::slug($fileName).'.'.$photo->getClientOriginalExtension();
		    $photo->move('public/imgs/users', $filename);

			
    	}

		$perfile = New Perfil();
		$perfile->descripcion = Input::get('descripcion');
		$perfile->photo = $filename;
		$user->Perfil()->save($perfile);
		return Redirect::to('admin/users');
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
		return View::make('admin.user.show')->with('user', $user);
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
		return View::make('admin.user.edit')->with('user', $user);

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
        $user = User::findOrFail($id);
		$nombre = Input::get('nombre');
		$user->name = $nombre;
		$user->slugUser = Str::slug($nombre);
		$user->email = Input::get('email');
		$user->password = Input::get('password');
		$user->type = Input::get('type');
		$user->save();

		$photo = Input::file('photo');
		
		if (empty($photo))
		{
			$fileName = $photo->getClientOriginalName();
			$filename = Str::slug($fileName).'.'.File::extension($fileName);
		    $photo->move('public/imgs/users', $filename);
			
			$perfile = Perfil::where('user_id','=', $id)->first();
			if(!empty($perfile)){
				$perfile->descripcion = Input::get('descripcion');
				$perfile->photo = $filename;
				$user->Perfil()->save($perfile);
			}
			else
			{	
				$perfile = New Perfil();
				$perfile->descripcion = Input::get('descripcion');
				$perfile->photo = $filename;
				$user->Perfil()->save($perfile);
			}
		}
		else
		{
			$perfile = Perfil::where('user_id','=', $id)->first();
			if(!empty($perfile)){
				$perfile->descripcion = Input::get('descripcion');
				$user->Perfil()->save($perfile);
			}
			else
			{	
				$perfile = New Perfil();
				$perfile->descripcion = Input::get('descripcion');
				$user->Perfil()->save($perfile);
			}
		}
	return Redirect::to('admin/users');

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
		
		//$filename = 'public/imgs/users/'.$user->perfil->photo;
    	User::destroy($id);
		return Redirect::to('admin/users');
	}


}


