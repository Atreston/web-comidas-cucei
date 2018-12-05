<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top"><div class="container">
	<a class="navbar-brand" href="#">Tragazón CUCEI</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	
	<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item active">
				<a class="nav-link" href="#">
					Principal
					<span class="sr-only">(current)</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Acerca de</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Servicios</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Contacto</a>
			</li>
		</ul>
		
		<div class="ml-auto my-2 my-lg-0">
			<div class="section" id="b-section-navbar-search-form" name="Navbar: search form">
				<div class="widget BlogSearch" data-version="2" id="BlogSearch1">
					<form action="" class="form-inline">
						<input aria-label="Search this blog" class="form-control mr-sm-2" name="q" placeholder="Search this blog" type="text">
						<button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
					</form>
				</div>
			</div>
		</div>
		
		<div class="nav-item dropdown">
			@guest
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Sesión
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					<a class="dropdown-item" href="{{ route('login') }}">Iniciar Sesión</a>
					<a class="dropdown-item" href="{{ route('register') }}">Registrarse</a>
				</div>
			@else
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					{{ Auth::user()->name }}
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					<a class="dropdown-item" href="{{-- route() --}}">Mi perfil</a>
					<a class="dropdown-item" href="{{ route('logout') }}"
							   onclick="event.preventDefault();
											 document.getElementById('logout-form').submit();">
					Cerrar Sesión
					</a>

					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						@csrf
					</form>
				</div>
			@endguest
		</div>
	</div>
</div></nav>
