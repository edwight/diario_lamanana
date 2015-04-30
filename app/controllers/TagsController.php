<?php

class TagsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		/*
		$tag = DB::table('tags')->where('name', $slug)->first();
    	//return Tag::where('name', $value)->first();
    	return $tag;
		return View::make('tags.index')->with('tag', $tag);
		*/
		return "index tags";
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('tags.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//procesar el post 
		$tags = Input::get('tags');
		$tag = new Tag;
		$tag->name = $tags;
		//$tag->slugTags = str_replace(' ','-',$tags);
		$tag->slugTags = Str::slug($tags);
		$tag->save();
		return Redirect::to('admin/tags');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
