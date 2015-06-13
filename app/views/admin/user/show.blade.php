<p>Bienbenido </p><strong>detalles</strong>
<div class="menu">
	<li><p>{{ HTML::link( 'lista' , 'lista usuario') }}</p></li>
	<li><p>{{ HTML::link( 'users/'.$user->id.'/edit', 'editar') }}</p></li>
	
</div>
<p>{{ HTML::link( 'logout' , 'salir') }}</p>
		@if($user->perfil)
				{{ HTML::image($user->perfil->photo, "Imagen no encontrada")}}
		@endif
	  <p>{{ $user->first_name}}</p>
	    <p>{{ $user->last_name}}</p>
	    <p>{{$user->email}}</p>
	    <p>ultima<strong> sesion</strong></p>
	    <p/>{{$user->last_login}}</p>
	    <p>post de: <strong>{{$user->email}}</strong></p>
	    <h2>POST DE {{ $user->first_name}}<span>{{ $user->last_name}}</span></h2>
	    @foreach($user->post as $posts)
			<p>{{ HTML::link( 'admin/users/'.$user->id.'/edit' , 'editar') }}</p>
	   		 <br>
	  		<p>{{ $posts->titulo}}</p>
		@endforeach


	    