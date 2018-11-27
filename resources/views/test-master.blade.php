<!--
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
-->
<!-- Include the above in your HEAD tag -->

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>Web de Comidas</title>

<!-- Bootstrap core CSS -->
<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->
<!-- <link rel="stylesheet" href="assets/css/bootstrap.css"> -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

<!-- Added because it was requested above -->
<!-- <script scr="assets/jquery-3.3.1.min.js"></script> -->
<!-- <script scr="assets/bootstrap.js"></script> -->
<script scr="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script scr="{{ asset('js/bootstrap.js') }}"></script>


<!-- Custom styles for this template -->
<!--<link href="css/blog-home.css" rel="stylesheet">-->
<!-- <link rel="stylesheet" href="blog-style.css"> -->
<link rel="stylesheet" href="{{ asset('css/blog-style.css') }}">
</head>

<body>
	<!-- Header with the title of the page -->
    @yield('header')
    
    <!-- Navigation -->
    @yield('navbar')

    <!-- Page Content -->
	<div class="container mt-5">
		<div class="row">

			<!-- Blog Entries Column -->
            @yield('content')

            <!-- Sidebar Widgets Column -->
            @yield('sidebar')

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!--footer-->
    @yield('footer')
    
    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>
