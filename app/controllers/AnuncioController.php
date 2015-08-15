<?php

class AnuncioController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//$anuncios = Revista::all();
		//return View::make('admin.revista.index')->with('revistas', $revistas);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//crear el post 
		return View::make('admin.anuncios.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$reglas =  array
		(
			'photo' => array('unique:imgs'),'required',
	        'date_expire'  => 'required', 
	        'position'  => 'required'
    	);
    	$messages = array(
            'required' => 'El campo :attribute es obligatorio.',
            'unique' => 'El la imagen ingresada ya existe en la base de datos'
        );
        $nuevo = array(
        	'date_expire' => Input::get('date_expire'),
        	'position' => Input::get('position'),
        	'photo' => Input::file("photo")
        	);

        $validation = Validator::make($nuevo, $reglas, $messages);
		if ( $validation->fails())
		{
        // en caso de que la validación falle vamos a retornar al formulario 
        // pero vamos a enviar los errores que devolvió Validator
        // y también los datos que el usuario escribió 
        	return Redirect::to('admin/anuncios/create')
                // Aquí se esta devolviendo a la vista los errores 
                ->withErrors($validation)
                // Aquí se esta devolviendo a la vista todos los datos del formulario
                ->withInput();
    	}
    	else
    	{ 	
    		$file = Input::file("photo");	
    			/*
    		$fileName = $file->getClientOriginalName();
	       	//$file->move('public/imgs/publicidad', $fileName);
	       
	       
	        $anuncio = new Anuncio;
	        $anuncio->position = $fileName;
			$anuncio->position = Input::get('position');
			$anuncio->date_expire = Input::get('date_expire');
			$anuncio->save();
			*/

	        return Redirect::to('admin/anuncios');
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
		
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		
			
	}


}
