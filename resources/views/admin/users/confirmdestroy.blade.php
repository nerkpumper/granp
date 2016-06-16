@extends ('admin.template.main')

@section('title', 'Eliminar Usuario  <strong>' . $user->fullname . '</strong>')

@section('classPanel', 'panel-warning')

@section('content')
	<div class="alert alert-danger" role="alert">
		Se eliminará el Usuario &nbsp;&nbsp;  <strong>{{ $user->fullname }}</strong>
		<br>
		<br>
		<strong>¿Esta seguro de eliminar al usuario?</strong>
	</div>
	<div>
		<a href="{{ route ('admin.users.destroy', $user->id) }}" class="btn btn-danger">Borrar</a>
		&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="{{ URL::previous() }}" class="button info rounded">Regresar</a>	
	</div>
	
@endsection