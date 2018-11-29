@extends('test-master')

@section('navbar')
	@include('test-include-nav')
@endsection

@section('content')
	<div class="profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				
			</div><!-- profile-sidebar -->
		</div><!-- div col-md-3 -->
	</div><!-- div profile -->
@endsection

@section('footer')
	@include('test-include-footer-main')
@endsection
