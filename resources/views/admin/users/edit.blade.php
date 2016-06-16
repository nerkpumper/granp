@extends ('admin.template.main')

@section('title', 'Actualizar Usuario')

@section('content')
	
	{!! Form::open (['route' => ['admin.users.update', $user->id], 'method' => 'PUT']) !!}
		
		<div class="form-group">
			{!! Form::label('username', 'Usuario') !!}
			{!! Form::text('username', $user->username, ['class' => 'form-control', 'placeholder' => 'Usuario', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('fullname', 'Nombre') !!}
			{!! Form::text('fullname', $user->fullname, ['class' => 'form-control', 'placeholder' => 'Nombre Completo', 'required']) !!}
		</div>			

		{!! Form::submit ('Actualizar', ['class' => 'btn btn-info']) !!}
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="{{ URL::previous() }}" class="button info rounded">Regresar</a>	
		
	{!! Form::close() !!}
	

@endsection
