@if( $errors->any() )
	<div class="alert alert-danger" role="alert">
		Los siguientes parámetros son incorrectos: 
		<ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
	</div>
	
@endif
