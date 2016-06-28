<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel='shortcut icon' type='image/x-icon' href='{{ asset('img/logo_egp.ico') }}' />
	<title>@yield('title', 'Default') | Panel de Administración</title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
</head>
<body style="background: url('{{ asset ('img/fondo2.jpg') }}') no-repeat center center fixed; background-size: cover;">


	<div class="container">

		@include('admin.template.partials.nav')

		<section>

			<div class="panel @yield('classPanel','panel-default')">
			  <div class="panel-heading">@yield('title', 'Default')</div>
			  <div class="panel-body">
			    @yield('content', '')
			  </div>
			</div>
			
		</section>

		@include('admin.template.partials.footer')		
		
	</div>


	<script src="{{ asset('plugins/jquery/js/jquery-2-1-4.min.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>	

</body>
</html>