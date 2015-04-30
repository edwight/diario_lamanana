<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/','PostController@index');
Route::get('edicion/impreso/{id}','PostController@revista');
Route::get('edicion','PostController@edicion');
//Route::get('/','PostController@index');
Route::post('/Busqueda','BusquedaController@postBusqueda');
Route::any('hot/chicahot', 'ChicahotController@index');
Route::get('/{id}/{slug}','PostController@show')->where(array('id' => '[0-9]+','slug', '([A-z\d-\/_.]+)?'));

Route::get('/etiquetas/{slug}', function($slug)
{
	//$tag = DB::table('tags')->where('name', $slug)->first();
    	//$tag = Tag::where('name', $slug)->first();
    	$tags = Tag::where('name', '=', $slug)->first();
    	//return $tag;
		$chica = ChicaHot::orderBy('id', 'desc')->first();
		$revista = Revista::orderBy('id', 'desc')->first();
		//return $tag->posts;
		//foreach ($tags as $posts) {
		//	echo $posts->titulo;
		//}
		
    	//$post = Post::with('tags', 'laravel')->get();
    	//return $tags;
    	//return $tags->posts->titulo;
    	
    	if($tags){	
    		$tag= $tags->posts()->paginate(5);
    		return View::make('tags.index', array('tag' => $tag, 'chica' => $chica, 'revista' => $revista));
    	}
		else{
			return Response::view('errors.404', array(), 404);
			//return "resultado no encontrado";
		}
		
})->where('slug', '([A-z\d-\/_.]+)?');
Route::get('categoria/{slug}', function($slug)
{
	//$tag = DB::table('tags')->where('name', $slug)->first();
    	//$tag = Tag::where('name', $slug)->first();
    	$category = category::where('name', '=', $slug)->first();  	
    	if($category){
    		$categorys = $category->posts()->paginate(5);
    		$chica = ChicaHot::orderBy('id', 'desc')->first();
			$revista = Revista::orderBy('id', 'desc')->first();
    		return View::make('post.category', array('categorys' => $categorys, 'chica' =>$chica, 'revista' =>$revista));
    	}
		else{
			return Response::view('errors.404', array(), 404);
		}
		
})->where('slug', '([A-z\d-\/_.]+)?');
Route::get('editor/{id}', function($id)
{
	$users = User::find($id);
	
	//return $user;
	//$user = User::where('first_name', '=', $slug)->first();
	//return $user;
	if($users){
		$user = $users->post()->paginate(5);
		$chica = ChicaHot::orderBy('id', 'desc')->first();
		$revista = Revista::orderBy('id', 'desc')->first();
    	return View::make('post.user',array('user'=>$user,'chica'=>$chica,'revista'=>$revista));
    }
	else{
		return Response::view('errors.404', array(), 404);
	}
})->where('id' , '[0-9]+');
//Route::resource('tags/{slug}', 'TagsController', ['only' => ['index']]);

Route::get('crear',function(){
	if (!mkdir('public/imgs/revista/1', 0777, true)) {
        return 'Failed to create folders...';
    }
    else
    {
         return 'Success';
    }
    });
Route::get('borrar',function(){
	 if (!rmdir('public/imgs/revista/1')) {
        return 'Failed to delete folders...';
    }
    else
    {
         return 'Success ';
    }
 });
Route::group(array('before' => 'auth.admin'), function()
{
	//Route::controller('users', 'UserController');
	Route::resource('admin/revista', 'RevistaController');
	Route::resource('admin/chicahot', 'ChicahotController');
	Route::resource('admin/users', 'UserController');
	Route::resource('admin/tags', 'TagsController');
	Route::resource('admin/category', 'CategoryController');
	Route::resource('admin', 'AdminController');
	Route::resource('admin/eliminar_hojas', 'EliminarHojasController');
	Route::get('logout','AuthController@logout');
});

Route::get('guardar', function()
{
	/*
	$user = new User;
	$user->nombre ="edwight";
	$user->nick = "el zorro";
	$user->password = "1234";
	$user->save();
	*/
	$user = User::find(1);

	$post = new Post;
	$post->titulo = "titulo";
	$post->contenido = "contenido";
	$user->post()->save($post);

});
Route::get('user', function()
{
/*
	try
	{
		Sentry::register(array(
			'first_name' => 'jhon',
			'last_name' => 'snow',
	    	'email'      => 'john.doe@example.com',
	    	'password'   => 'foobar',
	    	'activated'   => true,
	    	//'permissions'   => 'admin',
		));
	}
*/
	try
	{
	    // Create the user
	    $user = Sentry::createUser(array(
	        'first_name' => 'jhon',
			'last_name' => 'snow',
	    	'email'      => 'john.doe@example.com',
	    	'password'   => 'foobar',
	    	'activated'   => true,
	    ));

	    // Find the group using the group id
	    $adminGroup = Sentry::findGroupById(1);

	    // Assign the group to the user
	    $user->addGroup($adminGroup);
	}
	catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
	{
	    echo 'Login field is required.';
	}
	catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
	{
	    echo 'Password field is required.';
	}
	catch (Cartalyst\Sentry\Users\UserExistsException $e)
	{
	    echo 'User with this login already exists.';
	}
	catch (Cartalyst\Sentry\Groups\GroupNotFoundException $e)
	{
	    echo 'Group was not found.';
	}
});

Route::get('user2', function()
{
	try
	{
	    // Create the user
	    $user = Sentry::createUser(array(
	    	'first_name'	 => 'edwight',
			'last_name' 	 => 'delgado',
	        'email'       	 => 'edwardelgado0@gmail.com',
	        'password'    	 => '19252368/*+',
	        'activated'   	 => true,
	        'permissions' 	 => array(
	            'admin' 	 =>  1,
	            'editor' 	 => 1,
	            'user'   	 => 1,
	        ),

	    ));

	    $perfiles = new Perfil;
       	$perfiles->photo =  "public/imgs/user/bob2j.jpeg";
        $user->perfil()->save($perfiles);
        return Redirect::to('/')->with('message', 'Logged in with Facebook');
	}
	catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
	{
	    echo 'Login field is required.';
	}
	catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
	{
	    echo 'Password field is required.';
	}
	catch (Cartalyst\Sentry\Users\UserExistsException $e)
	{
	    echo 'User with this login already exists.';
	}
});
Route::get('user3', function()
{
	try
	{
	    // Create the user
	    $user = Sentry::createUser(array(
	    	'first_name'	 => 'yusmeli',
			'last_name' 	 => 'fuenmayor',
	        'email'       	 => 'yusmeli0@gmail.com',
	        'password'    	 => '123456',
	        'activated'   	 => true,
	        'permissions' 	 => array(
	            'admin' 	 =>  0,
	            'editor' 	 =>  1,
	            'user'   	 =>  1,
	        ),

	    ));

	    $perfiles = new Perfil;
       	$perfiles->photo =  "public/imgs/user/bob4kk.jpeg";
        $user->perfil()->save($perfiles);
        return Redirect::to('/')->with('message', 'Logged in with Facebook');
	}
	catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
	{
	    echo 'Login field is required.';
	}
	catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
	{
	    echo 'Password field is required.';
	}
	catch (Cartalyst\Sentry\Users\UserExistsException $e)
	{
	    echo 'User with this login already exists.';
	}
});
Route::get('permiso', function()
{
	Sentry::createGroup(array(
	    'name'    => 'Administrador',
	    'permissions' => array(
	        'create' => 1,
	        'delete' => 1,
	        'view' => 1,
	        'update' => 1,
	    ),
	    ));
});

Route::get('addpermiso', function(){
	//Sentry::getUser()->addGroup( Sentry::getGroupProvider()->findByName('admin') );

	 // Assign user permissions
	try
	{

		$user = Sentry::findUserById(5);
		$adminGroup = Sentry::findGroupById(4);
		if ($user->addGroup($adminGroup))
	    {
	        echo 'Group assigned successfully';
	    }
	    else
	    {
	        echo 'Group was not assigned';
	    }
	    //$adminUser  = Sentry::getUserProvider()->findByLogin('john.doee@example.com');
	    //$adminGroup = Sentry::getGroupProvider()->findByName('Administrador');
	    //$adminUser->addGroup($adminGroup);
	}
	catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
	{
    	echo 'User was not found.';
	}
	catch (Cartalyst\Sentry\Groups\GroupNotFoundException $e)
	{
    	echo 'Group was not found.';
	}
});

Route::get('ver', function(){
	if ( !Sentry::check())
	{
	    // User is not logged in, or is not activated
	    return "no tiene acceso";
	}
});
Route::get('buscar', function(){
	//buscar todos los usuarios acsinados a un grupo
$group = Sentry::findGroupByName('editor');

return $users = Sentry::findAllUsersInGroup($group);
});

Route::get('comprobar', function(){
	try
	{
	    // Find the user using the user id
	    $user = Sentry::findUserByID(5);

	    // Get the user permissions
	    return $permissions = $user->getPermissions();
	}
	catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
	{
	    echo 'User was not found.';
	}
});

Route::get('tieneacceso', function(){
	try
	{
	    // Find the user using the user id
	    $user = Sentry::findUserByID(5);
	    //$user = Sentry::getUserProvider()->findById (5);
	    // Check if the user has the 'admin' permission. Also,
	    // multiple permissions may be used by passing an array
	    if ($user->hasAccess('create'))
	    {
	        echo 'User has access to the given permission';
	    }
	    else
	    {
	        echo 'User does not have access to the given permission';
	    }
	}
	catch (Cartalyst\Sentry\UserNotFoundException $e)
	{
	    echo 'User was not found.';
	}
});

Route::get('estaactivado', function(){
	try
	{
	    // Find the user
	    $user = Sentry::findUserByLogin('john.doee@example.com');

	    // Check if the user is activated or not
	    if ($user->isActivated())
	    {
	        echo 'User is Activated';
	    }
	    else
	    {
	        echo 'User is Not Activated';
	    }
	}
	catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
	{
	    echo 'User was not found.';
	}
});
Route::get('inGroup', function(){
	try
	{
	    // Find the user using the user id
	    $user = Sentry::findUserByID(5);

	    // Find the Administrator group
	    $admin = Sentry::findGroupByName('editor');

	    // Check if the user is in the administrator group
	    if ($user->inGroup($admin))
	    {
	        echo 'User is in Administrator group';
	    }
	    else
	    {
	        echo 'User is not in Administrator group';
	    }
	}
	catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
	{
	    echo 'User was not found.';
	}
	catch (Cartalyst\Sentry\Groups\GroupNotFoundException $e)
	{
	    echo 'Group was not found.';
	}
});

Route::get('permisodegrupo', function(){
	try
	{
    // Find the user using the user id
    $user = Sentry::findUserByID(5);

    // Get the user groups
   	$groups = $user->getGroups();
   	$id = Auth::user()->id;
   	return $user->getName();
    if($groups[2] =="editor"){
    	echo 'editor';
    }
	}
	catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
	{
    	echo 'User was not found.';
	}
});

$url = "mi-url";
Route::any('temas/(:any)', function($url){
	return Response::error('404');
	return $url;
});

//$slug = "mi-url";
Route::any('tema/{slug}', function($slug)
{
    //do whatever you want with the slug
    return $slug;
    //return Response::error('404');
})->where('slug', '([A-z\d-\/_.]+)?');

Route::get('login','AuthController@login');

Route::post('login','AuthController@postLogin');

