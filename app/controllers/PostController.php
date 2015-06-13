<?php

class PostController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{	
		//lista de usuario
		//$post = Post::all();
		$primera = Post::where('primeras', '=', 1)->orderBy('id', 'desc')->take(3)->get();
		
		//$yesterday = date('Y-m-d',strtotime("+1 day"));
		//return Post::whereBetween('created_at', $yesterday);
		//return date('Y-m-d',strtotime("-1 day"));
		//return date('Y-m-d');
		/*$primera = Post::where('primeras', '=', 1 )->where('created_at','>=',new \DateTime('yesterday'))
		->orderBy('id', 'desc')
		->take(3)
		->get();
		*/
		//$result = $date->format('Y-m-d H:i:s');
		//return Post::where('created_at', '>=',$result);

		//$date = date('Y-m-d');
    	//$post = Post::where('updated_at', '=', $date)->paginate(10);
    	require 'vendor/autoload.php';
		//use Carbon\Carbon;

    	//return("Now: %s", Carbon::now());
    	$yesterday = Carbon::now()->yesterday();

    	//return $hora = $rr->getCarbonAgo($rr->updated_at);
    	//return Carbon::now()->subDays($hora)->diffForHumans();

		$chica = ChicaHot::orderBy('id', 'desc')->first();
		$revista = Revista::orderBy('id', 'desc')->first();
		$date = Post::orderBy('id', 'desc')->select('updated_at')->first();
		//$fecha = Carbon::createFromFormat('Y-m-d', '2012-10-17')->format('d');
		//$fecha = DateTime::createFromFormat('d', '2012-10-17');
		//return Carbon::now()->day;
		$post = Post::orderBy('id', 'desc')->paginate(9);
		return View::make('post.index', array('post'=>$post,'primera'=>$primera,'chica'=>$chica,'revista'=>$revista));
		/**
		$date=date_create($date->updated_at);
		if(date_format($date,"d") < Carbon::now()->yesterday()->day){
			//return 'ayer';
			$post = Post::orderBy('id', 'desc')->take(20)->paginate(9);
			return View::make('post.index', array('post'=>$post,'primera'=>$primera,'chica'=>$chica,'revista'=>$revista));
		}
		if(date_format($date,"d") >= Carbon::now()->yesterday()->day){
			//return 'hoy-ayer';
			$post = Post::orderBy('id', 'desc')->where('updated_at','>=', $yesterday)->paginate(9);
			return View::make('post.index', array('post'=>$post,'primera'=>$primera,'chica'=>$chica,'revista'=>$revista));
		}
		if(date_format($date,"d") >= Carbon::now()->day){
			//return 'hoy-hoy';
			$post = Post::orderBy('id', 'desc')->where('updated_at','>=', $yesterday)->paginate(9);
			return View::make('post.index', array('post'=>$post,'primera'=>$primera,'chica'=>$chica,'revista'=>$revista));
			
		}
			
		**/
		
	}


	public function show($id)
	{
		//detalles del usuario 
		$post = Post::find($id);
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


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function category($id)
	{

		//modificar usuario users/1/edit
		$user = User::find($id);
		return View::make('post.category')->with('user', $user);

	}
	public function edicion()
	{
		//modificar usuario users/1/edit
		$revistas = Revista::orderBy('id','desc')
			->take(18)
			->get();
		$chica = ChicaHot::orderBy('id', 'desc')->first();
		$revista = Revista::orderBy('id', 'desc')->first();
		return View::make('post.edition')->with('revistas', $revistas)->with('chica', $chica)->with('revista', $revista);

	}

	public function revista($id)
	{
		$revista = Revista::find($id);
		return View::make('post.magazine')->with('revista', $revista);
	}

}
