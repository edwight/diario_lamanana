<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showIndex()
	{
		$primera = Post::where('primeras', '=', 1)->orderBy('id', 'desc')->take(3)->get();
		$chica = ChicaHot::remember(120)->orderBy('id', 'desc')->first();
		$revista = Revista::remember(120)->orderBy('id', 'desc')->first();
		//$chica = ChicaHot::orderBy('id', 'desc')->first();
		//$date = Post::orderBy('id', 'desc')->select('updated_at')->first();
		$post = Post::with('user','category','contenido','img')->orderBy('id', 'desc')->paginate(12);
		return View::make('post.index', compact('post','primera','chica','revista'));
	}
	
	public function showDetail($id)
	{

		//detalles del usuario 
		$post = Post::with('contenido','category','img')->find($id);

		SEOMeta::setTitle($post->titulo);
        //SEOMeta::setDescription($post->resume);
        SEOMeta::addMeta('article:published_time', $post->created_at->toW3CString(), 'property');
        SEOMeta::addMeta('article:section', $post->category->name, 'property');
        // Vinicius73\SEO\Generators\MetaGenerator::addMeta($meta, $value, $name);
        SEOMeta::setKeywords($post->tags);
        // Vinicius73\SEO\Generators\MetaGenerator::setKeywords(['key1','key2','key3']);
        // Vinicius73\SEO\Generators\MetaGenerator::setKeywords('key1, key2, key3');




		//return $post->tags->lists('id');
		//return View::make('post.show')->with('post', $post);
		$tag_ids = $post->tags->lists('id');
		if(empty($tag_ids)){
			return View::make('post.show')->with('post', $post);	
		}
		else
		{
			$relatedArticles = Post::whereHas('tags', function ($q) use ($tag_ids) {
				$q->whereIn('tags.id', $tag_ids);
			})
			->orderBy('created_at')
			->take(6)
			->get();
			//return $post;
			//return $relatedArticles;
			//$this->layout->content = View::make('post.show')->with('post', $post, 'related', $related);
			return View::make('post.show2', array('post' => $post, 'relatedArticles'=> $relatedArticles));

		}
	}
	public function showHot()
	{
		$hot = ChicaHot::take(12)->orderBy('id','DESC')->get();
		return View::make('chicahot.index',compact('hot'));
	}
	public function showCategory($slug)
	{
		$category = category::where('name', '=', $slug)->first();  	
    	if($category){
    		$categorys = $category->posts()->paginate(12);
    		$chica = ChicaHot::orderBy('id', 'desc')->first();
			$revista = Revista::orderBy('id', 'desc')->first();
    		return View::make('post.category', array('categorys' => $categorys, 'chica' =>$chica, 'revista' =>$revista));
    	}
		else{
			return Response::view('errors.404', array(), 404);
		}
	}
	public function showEditor($id)
	{
		$users = User::with('post','post.contenido','post.category','post.img')->find($id);
		
		//$user = User::where('slugUser', '=', $slug)->first();
		//return $user;
		
		//return $user;
		if($users){
			$user = $users->post()->paginate(12);
			$chica = ChicaHot::orderBy('id', 'desc')->first();
			$revista = Revista::orderBy('id', 'desc')->first();
	    	return View::make('post.user',array('user'=>$user,'chica'=>$chica,'revista'=>$revista));
	    }
		else{
			return Response::view('errors.404', array(), 404);
		}
		return View::make('hello');
	}
	public function showTags($slug)
	{
	//$tag = DB::table('tags')->where('name', $slug)->first();
    	//$tag = Tag::where('name', $slug)->first();
    	$tags = Tag::where('name', '=', $slug)->first();
    	//return $tag;
		$chica = ChicaHot::orderBy('id', 'desc')->first();
		$revista = Revista::orderBy('id', 'desc')->first();
	
    	if($tags){	
    		$tag= $tags->posts()->paginate(12);
    		return View::make('tags.index', array('tag' => $tag, 'chica' => $chica, 'revista' => $revista));
    	}
		else{
			return Response::view('errors.404', array(), 404);
			//return "resultado no encontrado";
		}

	}
	public function showEdicion()
	{
		$chica = ChicaHot::orderBy('id', 'desc')->first();
		$revista = Revista::with('hojas')->orderBy('id', 'desc')->first();
		$revistas = Revista::with('hojas')->orderBy('id', 'desc')->take(5)->get();
		//$revistas = Revista::with('hojas')->remember(120)->orderBy('id', 'desc')->take(5)->get();
		//dd($revista);
		return View::make('post.edicion',compact('revistas','chica','revista'));
	}

}
