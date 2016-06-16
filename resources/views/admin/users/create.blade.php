@extends ('admin.template.main')

@section('title', 'Crear Usuario')

@section ('content')

	

	{!! Form::open(['route' => 'admin.users.store', 'method' => 'POST']) !!}

		<div class="form-group {{ $errors->has('username') ? ' has-error' : '' }}">
			{!! Form::label('username', 'Usuario') !!}
			{!! Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Usuario']) !!}
			@if ($errors->has('username'))
				<span class="help-block">
                	<strong>{{ $errors->first('username') }}</strong>
            	</span>
			@endif
		</div>

		<div class="form-group {{ $errors->has('fullname') ? ' has-error' : '' }}">
			{!! Form::label('fullname', 'Nombre') !!}
			{!! Form::text('fullname', null, ['class' => 'form-control', 'placeholder' => 'Nombre Completo']) !!}
			
			@if ($errors->has('fullname'))
				<span class="help-block">
                	<strong>{{ $errors->first('fullname') }}</strong>
            	</span>
			@endif
		</div>

		<div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
			{!! Form::label('password', 'Contraseña') !!}
			{!! Form::password('password', ['class' => 'form-control', 'placeholder' => '**************']) !!}

			@if ($errors->has('password'))
				<span class="help-block">
                	<strong>{{ $errors->first('password') }}</strong>
            	</span>
			@endif
		</div>

		<div class="form-group">			
			{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}

@endsection