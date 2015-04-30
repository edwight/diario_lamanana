<?php

class CategoryController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		$categorys = Category::all();
		return View::make('category.index')->with('categorys', $categorys);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('category.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//procesar el post 
		$category = Input::get('category');
		$categorys = new Category;
		$categorys->name = $category;
		//$categorys->slugCategory = str_replace(' ','-',$category);
		$categorys->slugCategory = Str::slug($category);
		$categorys->save();
		return Redirect::to('admin/category');
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
		
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$category = Input::get('category');
		$categorys = Category::find($id);
		$categorys->name = $category;
		//$categorys->slugCategory = str_replace(' ','-',$category);
		$categorys->slugCategory = Str::slug($category);
		$categorys->save();
		return Redirect::to('admin/category');
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
