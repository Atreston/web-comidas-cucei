@extends('layouts.master')

@section('navbar')
	@include('includes.navbar')
@endsection

@section('header')
	@include('includes.header')
@endsection
	
@section('sidebar')
	@include('includes.sidebar')
@endsection

@section('footer')
	@include('includes.footer-main')
@endsection

@section('content')
	<div class="col-md-8">
	@foreach( $posts as $post ) 
		<div class="card mb-4">
			<img class="card-img-top" src="https://3.bp.blogspot.com/--C1wpaf_S4M/W7V__10nRoI/AAAAAAAAK24/1NSfapuYSIY0f0wzXY9NgoH0FjQLT07YACKgBGAs/s1600/maxresdefault.jpg" alt="Card image cap">
			<div class="card-body">
				<h2 class="card-title">{{ $post->title }}</h2>
				<p class="card-text">{{ $post->description }}</p>
			</div>
			<div class="card-footer text-muted">
				Posteado en {{ $post->created_at }} 
			</div>
		</div>
	@endforeach
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
