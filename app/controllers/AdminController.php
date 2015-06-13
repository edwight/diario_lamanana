<?php

class AdminController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$post = Post::with('user','category','contenido','img')->orderBy('id', 'desc')->paginate(9);
		//mostrar la lista de post
		//$tags = Tag::all();
		return View::make('admin.post.index', array('post'=>$post));
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
		$userlist = User::all();
		$categorylist = Category::all();
		$tagslist = Tag::all();
		return View::make('admin.post.create', array('user'=>$user,'userlist'=>$userlist,'categorylist'=>$categorylist,'tagslist'=>$tagslist));
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

        	
			//$user = Sentry::getUser();
			//$userId = $user->id;
			//insertar Post
			$primeras = Input::get('primeras');
			$post = new Post;
			$titulo = Input::get('titulo');
			$post->titulo = $titulo;
			$post->slugPost = Str::slug($titulo);
			$post->primeras = $primeras;
			$post->save();
			
			$contenido = New Contenido();
			$contenido->subtitulo = Input::get('subtitulo');
			$contenido->contenido = Input::get('contenido');
			$contenido->descripcion = Input::get('descripcion');
			$post->contenido()->save($contenido);

			//$post->category()->name = $category;
			//$post->slug = Input::get('url');
			
		
			$editor = Input::get('editor');
			$users = User::find($editor);
			$users->post()->save($post);
			//insertar categoria
			$category = Input::get('categorys');
			$categorys = Category::find($category);
			$categorys->posts()->save($post);
			

			/*if (isset($category)) {
				
					$categorys = Category::find($category);
					$post->categorys()->save($categorys);
				
			} */
			//insertar tags

			$tag=Input::get('tags');
			if (isset($tag)) 
			{
				foreach ($tag as $tagId) 
				{
					$tags = Tag::find($tagId);
					$post->tags()->attach($tags);
				}
			}
			$file = Input::file("imagen");
	
			if (!empty($file))
			{
				//return "definida";
				$date = time();
				$fileName = $date. '_' . $file->getClientOriginalName();
				$extension = File::extension($fileName);
				$filename = Str::slug($fileName);
				$filename = $filename.'.'.$extension;
				//return $fileSize = $filename->getClientSize();
				//$start_day = date("d-m-Y", strtotime($start_day_old));
				//$filename = $file->getClientOriginalName();
				$file->move('public/imgs/post', $filename);

				$Imgfile   =   new Img;
				$Imgfile->imagen = $filename;
				$post->img()->save($Imgfile);

			}
		
			return Redirect::to('admin/posts');
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
		$post = Post::findOrFail($id);
		return View::make('admin.post.show')->with('post',$post);
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
		$post = Post::findOrFail($id);
		$userlist = User::all();
		$categorylist = Category::all();
		$tagslist = Tag::all();
		return View::make('admin.post.edit',compact('post','userlist','categorylist','tagslist'));
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
		//eliminar un post 
	}

}
