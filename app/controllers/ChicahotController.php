<?php

class ChicahotController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{	
		$chica = Chicahot::orderBy('id','DESC')->take(18)->get();
		return View::make('admin.chica.index')->with('chica', $chica);
	}

	public function create()
	{
		//$hot = Chicahot::all();
		//return $hot;
		//crear el post 
		return View::make('admin.chica.create');
	}
	public function store()
	{
		//validacion 
		$reglas =  array
		(

	        'img'  => 'required',
	            // validemos que el correo sea un campo obligatorio y con formato de email
    	);
    	$messages = array(
            'required' => 'El campo :attribute es obligatorio.',
        );
        $nuevo = array(
        	'titulo' => Input::get('titulo'),
        	'slug' => Input::get('slug'),
        	'img' => Input::file("file")
        	);

        $validation = Validator::make($nuevo, $reglas, $messages);
		if ( $validation->fails())
		{
        // en caso de que la validación falle vamos a retornar al formulario 
        // pero vamos a enviar los errores que devolvió Validator
        // y también los datos que el usuario escribió 
        	return Redirect::to('admin/chicahot/create')
                // Aquí se esta devolviendo a la vista los errores 
                ->withErrors($validation)
                // Aquí se esta devolviendo a la vista todos los datos del formulario
                ->withInput();
    	}
    	else
    	{
    		$file = Input::file("file");
			if (!empty($file))
			{
				//return "definida";
				$filename = $file->getClientOriginalName();
				//return $fileSize = $filename->getClientSize();
				//$start_day = date("d-m-Y", strtotime($start_day_old));
				//$filename = $file->getClientOriginalName();
				$file->move('public/imgs/chicahot', $filename);
	
			}

        	//'Datos Validos!';
        	$titulo = Input::get('titulo');
			//insertar Post
			$hot = new Chicahot;
			$hot->img = $filename;
			$hot->titulo = $titulo;
			$hot->slugHot = str_replace(' ','-',$titulo);
			$hot->save();
			//$post->category()->name = $category;
			//$post->slug = Input::get('url');

			//insertar categoria
			//$users->chicahots()->save($hot);
		
			return Redirect::to('admin/chicahot');
    	}
    
	}
	public function show($id)
	{
		//detalles del usuario 
		//$post = Post::find($id);
		//return View::make('post.show')->with('post', $post);
	}

	public function delete()
	{
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	}
	

}
