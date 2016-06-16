@extends ('admin.template.main')

@section('title', 'Usuarios Registrados')


@section('content')

	@if(Session::has('message'))	
		
			<div class="alert alert-success alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  El usuario ha sido almacenado de manera exitosa.			  
			</div>
		
	@endif

	@if(Session::has('delete'))	
		
			<div class="alert alert-danger alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>			  
			  {!! Session::get('delete') !!}
			</div>
		
	@endif

	@if(Session::has('update'))	
		
			<div class="alert alert-warning alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>			  
			  {{ Session::get('update') }}
			</div>
		
	@endif

	<a href="{{ route ('admin.users.create') }}" class="btn btn-info">Registrar nuevo usuario</a>

	<br>&nbsp;

	<table class="table table-striped table-bordered" >
		<thead>
			<tr>
				<th>ID</th>
				<th>Usuario</th>
				<th>Nombre</th>
				<th>Acci&oacute;n</th>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $user)
				<tr>
					<td>{{ $user->id }}</td>
					<td>{{ $user->username }} </td>
					<td>{{ $user->fullname }} </td>
					<td>						
						<a href="{{ route ('admin.users.edit', $user->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
						<a href="{{ route ('admin.users.confirmdestroy', $user->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>						
					</td>
				</tr>			
			@endforeach			
		</tbody>		
	</table>	

	<center>
		{!! $users->render() !!}		
	</center>

	
	
@endsection