<?php

class EdicionController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$revistas = Revista::all();
		return View::make('admin.revista.index')->with('revistas', $revistas);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//crear el post 
		return View::make('admin.revista.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$file = Input::file('file');
		$editionName = Input::get('editionName');

		$path = 'public/imgs/revista/'.$editionName;
		
		if (!file_exists($path)){
			mkdir($path, 0777, true);
			$revistas = New Revista;
			$revistas->titulo = $editionName;
			$revistas->save();	

			$hoja = New Hoja;
        	$hoja->titulo = $fileName;
        	$revista = Revista::where('titulo',$editionName)->orderBy('id', 'desc')->first();
        	$revista->hojas()->save($hoja);

			$fileName = $file->getClientOriginalName();
            $file->move($path, $fileName); 
        	
        	
        	return Response::json('success', 200);
		}
		else
		{	
			$hoja = New Hoja;
        	$hoja->titulo = $fileName;
        	$revista = Revista::where('titulo', $editionName)->orderBy('id', 'desc')->first();
        	$revista->hojas()->save($hoja);

			$fileName = $file->getClientOriginalName();
        	$file->move($path, $fileName);
        	
        	return Response::json('success', 200);
        	//$revista->hojas()->save($hoja);
        	//return Response::json(array('filelink' => '/imgs/revista/'. $fileName));
		}
		
		
		//$extension = File::extension($file->getClientOriginalName());
        

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
		$revistas = Revista::find($id);
		//return $revista;
		//return View::make('revista.edit');
		return View::make('admin.revista.show')->with('revistas', $revistas);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$hojas = Hoja::find($id);
		//return $revista;
		//return View::make('revista.edit');
		return View::make('admin.revista.edit')->with('hojas', $hojas);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$hojas = Hoja::find($id);
		$revista = Hoja::find($id)->revista;
		$file = Input::file('file');
		$path = 'public/imgs/revista/'.$revista->titulo;
		
		if (!file_exists($path)){
			return Redirect::to('admin/revista')->withErrors('no existe la carpeta');
		}
		else
		{
			$fileName = $file->getClientOriginalName();
            $file->move($path, $fileName); 
        	
        	$hojas->titulo = $fileName;
        	$hojas->save();
        	return Response::json('success', 200);
        }
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		
			$revista = Revista::find($id);
			$directory = 'public/imgs/revista/'.$revista->titulo;
			$success = File::deleteDirectory($directory);
			if($success){
				Revista::destroy($id);
				return Redirect::to('admin/edicion');
			}
			else{
				return Redirect::to('admin/edicion')->withErrors('no existe la carpeta');
			}
			
	}


}