<?php

class BusquedaController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function postBusqueda()
	{

		$search = Input::get('search');
		$searchResult = Post::where('titulo', 'LIKE', '%'.$search.'%')
		->orderBy('id', 'desc')
		->get();
		$chica = ChicaHot::orderBy('id', 'desc')->first();
		$revista = Revista::orderBy('id', 'desc')->first();

		if(!$searchResult->isEmpty()){
			return View::make('post.busqueda', array('searchResult'=>$searchResult,'chica'=>$chica,'revista'=>$revista));
		}
		else{
			return 'resultado no encontrado';
		}
	}


}
