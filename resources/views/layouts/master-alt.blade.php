﻿<!--
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
-->
<!------ Include the above in your HEAD tag ---------->

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
    <!-- <script scr="assets/jquery-3.3.1.min.js"></script> --->
    <!-- <script scr="assets/bootstrap.js"></script> -->
    <script scr="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script scr="{{ asset('js/bootstrap.js') }}"></script>


    <!-- Custom styles for this template -->
    <!--<link href="css/blog-home.css" rel="stylesheet">-->
    <!-- <link rel="stylesheet" href="blog-style.css"> -->
    <link rel="stylesheet" href="{{ asset('css/blog-style.css') }}">

</head>

<body>
    <div class="section" id="b-section-header" name="Header">
		<div class="widget Header" data-version="2" id="Header1">
            <div class="header image-placement-behind no-image">
                <div class="container">
                    <h1><a href="">Tragazón CUCEI</a></h1>
                    <p>Texto ejemplo</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
		<div class="container">
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
            </div>
        </div>
    </nav>





    <!-- Page Content -->
	<div class="container">
		<div class="row">

			<!-- Blog Entries Column -->
            <div class="col-md-8">
				<h1 class="my-4">Comida del día <br>
					<small>Publicaciones recientes</small>
				</h1>
				
				<!-- Aqui va el contenido de los post -->
				@yield('content')
				
            </div>

            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Search Widget -->
                <div class="card my-4">
					<h5 class="card-header">Search</h5>
					<div class="card-body">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
								<button class="btn btn-secondary" type="button">Go!</button>
							</span>
                        </div>
                    </div>
                </div>

                <!-- Categories Widget -->
                <div class="card my-3">
                    <h5 class="card-header">Categories</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#">Simba</a>
                                    </li>
                                    <li>
                                        <a href="#">Nyati</a>
                                    </li>
                                    <li>
                                        <a href="#">Faru</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#">Kiboko</a>
                                    </li>
                                    <li>
                                        <a href="#">Fisi</a>
                                    </li>
                                    <li>
                                        <a href="#">Pundamlia</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Side Widget -->
                <div class="card my-4">
                    <h5 class="card-header">maelezo</h5>
                    <div class="card-body">
                        You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
                    </div>
                </div>
                
                <!-- Side Widget -->
                <div class="card my-4">
                    <h5 class="card-header">banner</h5>
                    <div class="card-body">
                        <img class="card-img-top" src="https://2.bp.blogspot.com/-vvG5hMTFOro/W6RaoxdAikI/AAAAAAAAK1k/jezYdP7fvfYvt15Jv8a0agrGQE2lMU8YgCKgBGAs/s1600/MASAI-2.jpg" alt="Card image cap">
                    </div>
                </div>
                
                <!-- tweeter -->
                <div class="card my-4">
                    <h5 class="card-header">Tweeter here</h5>
                    <div class="card-body">
						<a class="twitter-timeline" href="https://twitter.com/Luckmoshy?ref_src=twsrc%5Etfw">Tweets by Luckmoshy</a>
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        <a href="https://twitter.com/Luckmoshy?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @Luckmoshy</a>
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!--footer-->
    <footer class="kilimanjaro_area">
		
        <!-- Top Footer Area Start -->
        <div class="foo_top_header_one section_padding_100_70">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="kilimanjaro_part">
                            <h5>About Us</h5>
                            <p>It includes rich features & contents. It's designed & developed based on One Page/ Multi-page Layout,blog themes,world press themes and blogspot. You can use any layout from any demo anywhere.</p>
                            <p>webblogoverflow is completely creative, clean & 100% responsive website. Put your business into next level with Webublogoverflow.</p>
                        </div>
                        <div class="kilimanjaro_part m-top-15">
                            <h5>Social Links</h5>
                            <ul class="kilimanjaro_social_links">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i> Pinterest</a></li>
                                <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i> YouTube</a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i> Linkedin</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="kilimanjaro_part">
                            <h5>Tags Widget</h5>
                            <ul class=" kilimanjaro_widget">
                                <li><a href="#">Classy</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Creative</a></li>
                                <li><a href="#">One Page</a></li>
                                <li><a href="#">Multipurpose</a></li>
                                <li><a href="#">Minimal</a></li>
                                <li><a href="#">Classic</a></li>
                                <li><a href="#">Medical</a></li>
                            </ul>
                        </div>

                        <div class="kilimanjaro_part m-top-15">
                            <h5>Important Links</h5>
                            <ul class="kilimanjaro_links">
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Terms & Conditions</a></li>
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>About Licences</a></li>
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Help & Support</a></li>
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Careers</a></li>
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Privacy Policy</a></li>
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Community & Forum</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="kilimanjaro_part">
                            <h5>Latest News</h5>
                            <di v class="kilimanjaro_blog_area">
                                <div class="kilimanjaro_thumb">
                                    <img class="img-fluid" src="https://3.bp.blogspot.com/--C1wpaf_S4M/W7V__10nRoI/AAAAAAAAK24/1NSfapuYSIY0f0wzXY9NgoH0FjQLT07YACKgBGAs/s1600/maxresdefault.jpg" alt="">

                                </div>
                                <a href="#">Your Blog Title Goes Here</a>
                                <p class="kilimanjaro_date">21 Jan 2018</p>
                                <p>Lorem ipsum dolor sit amet, consectetur</p>
                            </div>
                            <div class="kilimanjaro_blog_area">
                                <div class="kilimanjaro_thumb">
                                    <img class="img-fluid" src="https://3.bp.blogspot.com/--C1wpaf_S4M/W7V__10nRoI/AAAAAAAAK24/1NSfapuYSIY0f0wzXY9NgoH0FjQLT07YACKgBGAs/s1600/maxresdefault.jpg" alt="">
                                </div>
                                <a href="#">Your Blog Title Goes Here</a>
                                <p class="kilimanjaro_date">21 Jan 2018</p>
                                <p>Lorem ipsum dolor sit amet, consectetur</p>
                            </div>
                            <div class="kilimanjaro_blog_area">
                                <div class="kilimanjaro_thumb">
                                    <img class="img-fluid" src="https://3.bp.blogspot.com/--C1wpaf_S4M/W7V__10nRoI/AAAAAAAAK24/1NSfapuYSIY0f0wzXY9NgoH0FjQLT07YACKgBGAs/s1600/maxresdefault.jpg" alt="">
                                </div>
                                <a href="#">Your Blog Title Goes Here</a>
                                <p class="kilimanjaro_date">21 Jan 2018</p>
                                <p>Lorem ipsum dolor sit amet, consectetur</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="kilimanjaro_part">
                            <h5>Quick Contact</h5>
                            <div class="kilimanjaro_single_contact_info">
                                <h5>Phone:</h5>
                                <p>+255 789 54 50 40
                                    <br> +2255 766 90 94 00</p>
                            </div>
                            <div class="kilimanjaro_single_contact_info">
                                <h5>Email:</h5>
                                <p>support@webblogoverflow.com
                                    <br> luckmoshy@gmail.com</p>
                            </div>
                        </div>
                        <div class="kilimanjaro_part">
                            <h5>Latest Works</h5>
                            <div class="kilimanjaro_works">
                                <a class="kilimanjaro_works_img" href="img/gallery/1.jpg"><img src="img/gallery/1.jpg" alt=""></a>
                                <a class="kilimanjaro_works_img" href="img/gallery/4.jpg"><img src="img/gallery/4.jpg" alt=""></a>
                                <a class="kilimanjaro_works_img" href="img/gallery/5.jpg"><img src="img/gallery/5.jpg" alt=""></a>
                                <a class="kilimanjaro_works_img" href="img/gallery/7.jpg"><img src="img/gallery/7.jpg" alt=""></a>
                                <a class="kilimanjaro_works_img" href="img/gallery/10.jpg"><img src="img/gallery/10.jpg" alt=""></a>
                                <a class="kilimanjaro_works_img" href="img/gallery/11.jpg"><img src="img/gallery/11.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Footer Bottom Area Start -->
        <div class=" kilimanjaro_bottom_header_one section_padding_50 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p>© All Rights Reserved by <a href="#">Webublogoverflow.blogspot -(with all love)<i class="fa fa-love"></i></a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>
