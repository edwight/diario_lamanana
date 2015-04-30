
@foreach($user as $users)
	<li>
		<a href="#">
		@if($users->perfil)
				{{ HTML::image($users->perfil->photo, "Imagen no encontrada")}}
		@endif
		<img class="dashboard-avatar" alt="Usman" src="http://www.gravatar.com/avatar/f0ea51fa1e4fae92608d8affee12f67b.png?s=50"></a>
		<strong>Name:</strong> <a href="#">{{ $users->first_name}} <span>{{ $users->last_name}}</span>
		</a><br>
		<strong>Create:</strong> {{ $users->created_at}}<br>
		<strong>Status:</strong> <span class="label label-success"></span>  
		<strong>Detalles:</strong> <span class="label label-success">{{ HTML::link( 'admin/users/'.$users->id , 'detalles') }}</span>                               
	</li>
@endforeach