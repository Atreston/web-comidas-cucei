@extends('test-master')

@section('navbar')
	@include('test-include-nav')
@endsection

@section('content')
	@include('test-login-form')
@endsection

@section('footer')
	@include('test-include-footer-main')
@endsection
