<nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">      
      <a class="navbar-brand" href="#">
        <img alt="Brand" src="{{ asset('img/logo_egp.ico') }}" width="42" style="position: relative; top: -10px;">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administraci&oacute;n <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('admin.users.index') }}">Usuarios</a></li>            
          </ul>
        </li>
      </ul>      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Ir a Página principal</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Opciones <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Salir</a></li>            
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>