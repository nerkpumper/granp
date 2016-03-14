<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Default') | Panel de Administración</title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
</head>
<body>

	<div class="container">

		@include('admin.template.partials.nav')

		<section>

			<div class="panel panel-default">
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