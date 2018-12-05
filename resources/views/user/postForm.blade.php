@extends('layouts.master')

@section('navbar')
	@include('includes.navbar')
@endsection

@section('content')

	<div class="col-sm-12">
		<div class="card mb-4">
			<div class="card-body">
				<h2 class="card-title">Creando una nueva publicación</h2>
				<p class="card-text">
					{!! Form::open(['route' => 'posts.store']) !!}
						{!! Form::label('title', 'Título:') !!} </br>
						{!! Form::text('title'); !!}</br>
						
						{!! Form::label('description', 'Descripción:') !!}</br>
						{!! Form::textarea('description', '', ['class' => 'form-control', 'rows' => '3', 
							'id' => 'message', 'placeholder' => 'Descripción de la publicación']); !!}</br>
						<div class="btn-toolbar justify-content-between">
                            <div class="btn-group">
                                {!! Form::submit('Compartir', ['class' => 'btn btn-primary'] ); !!}
                            </div>
                        </div>
					{!! Form::close() !!}
				</p>
				
			</div>
		</div>		
	</div>

@endsection

@section('footer')
	@include('includes.footer-alt')
@endsection
