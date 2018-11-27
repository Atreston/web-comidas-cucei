@extends('test-master')

@section('navbar')
	@include('test-include-nav')
@endsection

@section('header')
	@include('test-header')
@endsection
	
@section('sidebar')
	@include('test-sidebar')
@endsection

@section('content')
	<div class="col-md-8">
		<!-- Blog Post -->
		<div class="card mb-4">
			<img class="card-img-top" src="https://3.bp.blogspot.com/--C1wpaf_S4M/W7V__10nRoI/AAAAAAAAK24/1NSfapuYSIY0f0wzXY9NgoH0FjQLT07YACKgBGAs/s1600/maxresdefault.jpg" alt="Card image cap">
			<div class="card-body">
				<h2 class="card-title">Serengeti</h2>
				<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
				<a href="https://bootsnipp.com/fullscreen/6Xa15" class="btn btn-primary">Read More →</a>
			</div>
			<div class="card-footer text-muted">
				Posted on January 1, 2017 by
				<a href="#">Start Bootstrap</a>
			</div>
		</div>
		
		<!-- Blog Post -->
		<div class="card mb-4">
			<img class="card-img-top" src="https://3.bp.blogspot.com/--C1wpaf_S4M/W7V__10nRoI/AAAAAAAAK24/1NSfapuYSIY0f0wzXY9NgoH0FjQLT07YACKgBGAs/s1600/maxresdefault.jpg">
			<div class="card-body">
				<h2 class="card-title">Manyara</h2>
				<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
				<a href="https://bootsnipp.com/fullscreen/6Xa15" class="btn btn-primary">Read More →</a>
			</div>
			<div class="card-footer text-muted">
				Posted on January 1, 2017 by
				<a href="#">Start Bootstrap</a>
			</div>
		</div>
		
		<!-- Blog Post -->
		<div class="card mb-4">
			<img class="card-img-top" src="https://3.bp.blogspot.com/--C1wpaf_S4M/W7V__10nRoI/AAAAAAAAK24/1NSfapuYSIY0f0wzXY9NgoH0FjQLT07YACKgBGAs/s1600/maxresdefault.jpg" alt="Card image cap">
			<div class="card-body">
				<h2 class="card-title">Tarangire</h2>
				<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
				<a href="https://bootsnipp.com/fullscreen/6Xa15" class="btn btn-primary">Read More →</a>
			</div>
			<div class="card-footer text-muted">
				Posted on January 1, 2017 by
				<a href="#">Start Bootstrap</a>
			</div>
		</div>
		
		<!-- Pagination -->
		<ul class="pagination justify-content-center mb-4">
			<li class="page-item">
				<a class="page-link" href="#">← Older</a>
			</li>
			<li class="page-item disabled">
				<a class="page-link" href="#">Newer →</a>
			</li>
		</ul>
		
	</div>	
@endsection
