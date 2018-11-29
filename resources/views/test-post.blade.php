@extends('test-master')

@section('navbar')
	@include('test-include-nav')
@endsection

@section('content')
	<div class="col-sm-8">
		<!-- post -->
		<div class="row">
			<div class="col-sm-12">
				<!-- title -->
				<h1 class="my-4">Comida del día<br>
					<small>Publicaciones recientes</small>
				</h1>
				<!-- content -->
				
			</div>
		</div>
		<!-- comments section title-->
		<div class="row">
			<div class="col-sm-12">
				<h3>User Comment Example</h3>
			</div><!-- /col-sm-12 -->
		</div>
		<!-- comment box -->
		<div class="row">
			<div class="col-sm-2">
				comment box
			</div>
			<div class="col-sm-8">
				comment box
			</div>
		</div>
		<!-- previous loaded comments -->
		<div class="row">
			<!-- thumbnail -->
			<div class="col-sm-2">
				<div class="thumbnail">
					<img class="img-fluid img-thumbnail user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
				</div><!-- /thumbnail -->
			</div><!-- /col-sm-1 -->
			<!-- comment text -->
			<div class="col-sm-8">
				<div class="card">
					<div class="card-title">
						<strong>myusername</strong> <span class="text-muted">commented 5 days ago</span>
					</div>
					<div class="card-text">
						Panel content
					</div><!-- card-text -->
				</div><!-- card -->
			</div><!-- /col-sm-5 -->

		</div><!-- /row -->
	
	</div>
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
