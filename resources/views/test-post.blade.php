@extends('test-master')

@section('navbar')
	@include('test-include-nav')
@endsection

@section('content')
	{{-- titulo --}}
	<div class="col-md-8">
		<h1 class="my-4">Comida del día<br>
			<small>Publicaciones recientes</small>
		</h1>	
	</div>
	{{-- calificaciones --}}
	
	{{-- imagenes --}}
	
	{{-- descripcion --}}
	
	{{-- comentarios --}}
@endsection

@section('sidebar')
	<div class="col-md-4">
		
		{{-- datos del vendedor --}}	
		<div class="card my-4">
			<h5 class="card-header">Preparado por</h5>
			<div class="card-body">
				{{-- imagen --}}
				{{-- nombre --}}
			</div>
		</div>
		
		{{-- mas publicaciones del vendedor --}}
		Tambien vende:
		<div class="card my-4">
			<h5 class="card-header">Comida</h5>
			<div class="card-body">
				{{-- imagen --}}
				{{-- fecha --}}
				{{-- boton --}}
			</div>
		</div>
		
		{{-- publicaciones relacionadas --}}
		Tambien te puede interesar:
		<div class="card my-4">
			<h5 class="card-header">Comida</h5>
			<div class="card-body">
				{{-- imagen --}}
				{{-- fecha --}}
				{{-- boton --}}
			</div>
		</div>
	</div>
	
@endsection

@section('footer')
	@include('test-include-footer-alt')
@endsection
