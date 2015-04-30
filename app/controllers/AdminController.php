<?php

class AdminController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$post = Post::orderBy('id', 'desc')->paginate(9);
		//mostrar la lista de post
		$tags = Tag::all();
		return View::make('admin.index', array('post'=>$post,'tags'=>$tags));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//crear el post 
		$user = User::find(1);
		return View::make('admin.create')->with('user', $user);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//validacion 
		$reglas =  array
		(
			'editor' => 'required',
	        'titulo'  => 'required', 
	        'categorys'  => 'required',
	            // validamos que el nombre sea un campo obligatorio 
	        'contenido' => array('required', 'min:8'), 
	            // validamos que el usuario sea un campo obligatorio y de mínimo 8 caracteres
	        'imagen'  => array('unique:imgs'),
	            // validemos que el correo sea un campo obligatorio y con formato de email
    	);
    	$messages = array(
            'required' => 'El campo :attribute es obligatorio.',
            'min' => 'El campo :attribute no puede tener menos de :min carácteres.',
            'email' => 'El campo :attribute debe ser un email válido.',
            'max' => 'El campo :attribute no puede tener más de :max carácteres.',
            'unique' => 'El la imagen ingresada ya existe en la base de datos'
        );
        $nuevo = array(
        	'editor' => Input::get('editor'),
        	'categorys' => Input::get('categorys'),
        	'titulo' => Input::get('titulo'),
        	'contenido' => Input::get('contenido'),
        	'primeras' => Input::get('primeras'),
        	'imagen' => Input::file("imagen")
        	);

        $validation = Validator::make($nuevo, $reglas, $messages);
		if ( $validation->fails())
		{
        // en caso de que la validación falle vamos a retornar al formulario 
        // pero vamos a enviar los errores que devolvió Validator
        // y también los datos que el usuario escribió 
        	return Redirect::to('admin/create')
                // Aquí se esta devolviendo a la vista los errores 
                ->withErrors($validation)
                // Aquí se esta devolviendo a la vista todos los datos del formulario
                ->withInput();
    	}
    	else
    	{

        	//'Datos Validos!';
        	$editor = Input::get('editor');
        	$subtitulo = Input::get('subtitulo');
        	$descripcion = Input::get('descripcion');
        	$titulo = Input::get('titulo');
        	$category = Input::get('categorys');
        	$primeras = Input::get('primeras');
			//$user = Sentry::getUser();
			//$userId = $user->id;
			//insertar Post
			$users = User::find($editor);
			$post = new Post;
			$post->subtitulo = $subtitulo;
			$post->titulo = $titulo;
			//$post->slugPost = str_replace(' ','-',$titulo);
			$post->slugPost = Str::slug($titulo);
			$post->descripcion = $descripcion;
			$post->primeras = $primeras;
			$post->contenido = Input::get('contenido');
			//$post->category()->name = $category;
			//$post->slug = Input::get('url');

			//insertar categoria
			$users->post()->save($post);
			$categorys = Category::find($category);
			$categorys->posts()->save($post);
			//insertar categoria
			/*if (isset($category)) {
				
					$categorys = Category::find($category);
					$post->categorys()->save($categorys);
				
			} */
			//insertar tags
			$tag=Input::get('tags');
			if (isset($tag)) {
				foreach ($tag as $tagId) {
					$tags = Tag::find($tagId);
					$post->tags()->attach($tags);
				}
			}
			//$post->slug = Input::get('url');

			//$date = date('Y-m-d');
			$date = time();
			//insertar image
			$file = Input::file("imagen");
		
			if (!empty($file))
			{
				//return "definida";
				$filename = $date.'__'.$file->getClientOriginalName();
				$extension = File::extension($filename);
				$filename = Str::slug($filename);
				$filename = $filename.'.'.$extension;
				//return $fileSize = $filename->getClientSize();
				//$start_day = date("d-m-Y", strtotime($start_day_old));
				//$filename = $file->getClientOriginalName();
				$file->move('public/imgs/post', $filename);

				$Imgfile   =   new Img;
				$Imgfile->imagen = $filename;
				$post->img()->save($Imgfile);	
			}
		
			return Redirect::to('admin');
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
		//admin/1
		$post = Post::find($id);
		return View::make('admin.show')->with('post',$post);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//editar un post /admin/1/edit
		$post = Post::find($id);
		return View::make('admin.edit')->with('post', $post);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//'Datos Validos!';
    	$editor = Input::get('editor');
    	$subtitulo = Input::get('subtitulo');
    	$descripcion = Input::get('descripcion');
    	$titulo = Input::get('titulo');

    	$category = Input::get('categorys');
    	$contenido = Input::get('contenido');

		//$user = Sentry::getUser();
		//$userId = $user->id;
		//insertar Post
		$users = User::find($editor);
		$post = Post::find($id);

		$post->titulo = $titulo;
		$post->subtitulo = $subtitulo;
		//$post->slugPost = str_replace(' ','-',$titulo);
		$post->slugPost = Str::slug($titulo);
		$post->descripcion = $descripcion;
		$post->contenido = $contenido;
		
		//guardar 
		
		$users->post()->save($post);
		$categorys = Category::find($category);
		$categorys->posts()->save($post);
		$date = date('Y-m-d');
		//insertar image
		$file = Input::file("imagen");
		if (!empty($file))
		{
			
			$imgs = DB::table('imgs')->where('post_id','=', $id)->first();
			if($imgs)
			{
				//return $imgs->imagen;
				//$imgs = Img::where('post_id', '==', $id);

				$ruta = public_path().'/public/imgs/post/'.$imgs->imagen;
				if (File::exists($ruta)) 
				{
    				File::delete($ruta);
				}
				DB::table('imgs')->where('post_id','=', $id)->delete();
				//$filename = public_path().'public/imgs/post/foo.bar';
				$filename = $date.'__'.$file->getClientOriginalName();
			//return $fileSize = $filename->getClientSize();
			//$start_day = date("d-m-Y", strtotime($start_day_old));
			//$filename = $file->getClientOriginalName();
				$file->move('public/imgs/post', $filename);

				//$Imgfile = Img::where('post_id', '==', $id);
				$Imgfile   =   new Img;
				$Imgfile->imagen = $filename;
				$post->img()->save($Imgfile);
			}
			else
			{
				
				$filename = $date.'__'.$file->getClientOriginalName();
				$file->move('public/imgs/post', $filename);

				$Imgfile   =   new Img;
				$Imgfile->imagen = $filename;
				$post->img()->save($Imgfile);	
			}	
			
		}

		return Redirect::to('admin');


	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//eliminar un post 
		$post = Post::find($id);
		$imgs = DB::table('imgs')->where('post_id','=', $id)->first();
		if ($imgs) 
		{
		$ruta = 'public/imgs/post/'.$imgs->imagen;
		if (File::exists($ruta)) 
		{
			File::delete($ruta);
		}
		$post->delete();
		Session::flash('message', 'Successfully deleted the nerd!');
        return Redirect::to('admin');
		}
		else
		{
			$post->delete();
			Session::flash('message', 'Successfully deleted the nerd!');
        	return Redirect::to('admin');
		}	
			
	}


}
