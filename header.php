<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url') ?>/images/favicon.png">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
		

		





    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body class="js <?php  global $post; echo $post->post_name; ?> page-id-<?php echo get_the_ID(); ?> ">
	
	<!-- Preloader -->
	<div class="cp-preloader">
		<div class="cp-preloader__box"> 
			<div class="cp-preloader-inner">
				<div class="icon">
					<i class="fa fa-plane"></i>
				</div>
			</div>
		</div>
	</div>
	<!-- End Preloader -->

	<!-- Header Area -->
	<header id="site-header" class="site-header">
		<!-- Start Topbar -->
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
						<!-- Text -->
						
						<a href="<?php echo home_url(); ?>"><p><?php bloginfo('name'); ?></p></a>
						<br/>
						<br/>
						<p><?php bloginfo('description'); ?></p>

						<!--/ End Text -->
                    </div>
					<div class="col-lg-6 col-md-6 col-12">
						<!-- Social -->
						<ul class="social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>
						<!--/ End Social -->
                    </div>
				</div>
            </div>
        </div>
		<!--/ End Topbar -->
		<!-- Middle Header -->
		<div class="middle-header">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-12">
						<!-- Logo -->
						<div class="logo">
							<a href="index.html"><img src="<?php bloginfo('template_url') ?>/images/logo.png" alt="logo"></a>
						</div>
						<!--/ End Logo -->
						<div class="mobile-nav"></div>
					</div>
					<div class="col-lg-9 col-md-9 col-12">
						<!-- Header Widget -->
						<div class="header-widget">
							<!-- Single Widget -->
							<div class="single-widget">
								<img src="<?php bloginfo('template_url') ?>/images/location-icon.png" alt="#">
								<h4>321 St Jeanne Dance, Flans</h4>
								<p>Bomanias, US</p>
							</div>
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<div class="single-widget">
								<img src="<?php bloginfo('template_url') ?>/images/call-icon.png" alt="#">
								<h4>+012 345 678990</h4>
								<p>Troll Free </p>
							</div>
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<div class="single-widget">
								<img src="<?php bloginfo('template_url') ?>/images/clock-icon.png" alt="#">
								<h4>Mon -Fri: 9:00-19:00</h4>
								<p>Sunday Closed</p>
							</div>
							<!--/ End Single Widget -->
						</div>
						<!--/ End Header Widget -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Middle Header -->
		<!-- Header Bottom -->
		<div class="header-bottom">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<!-- Main Menu -->
						
						
						
						<div class="main-menu ">
							
							<nav class="navigation">
									
								<!-- <ul class="nav menu"> -->
									<?php 
									wp_nav_menu(array(
										'theme_location'=>'head_menu',
										'menu_class'=>'nav menu dropdown',
										

							)); ?>
									<!-- <li class="active"><a href="#">Home<i class="fa fa-angle-down"></i></a>
							
										<ul class="dropdown">
											<li><a href="index.html">Homepage</a></li>
											<li><a href="index2.html">Homepage Slider</a></li>
											<li><a href="index3.html">Homepage Video</a></li>
											<li><a href="index4.html">Homepage Animation</a></li>
										</ul>
													
									</li>
									<li><a href="#">Trip package<i class="fa fa-angle-down"></i></a>
										<ul class="dropdown">
											<li><a href="trip-3-column.html">Trip Package 3 Column</a></li>
											<li><a href="trip-4-column.html">Trip Package 4 Column</a></li>
											<li><a href="trip-single.html">Trip Single</a></li>
										</ul>
									</li>
									<li><a href="#">Services<i class="fa fa-angle-down"></i></a>
										<ul class="dropdown">
											<li><a href="services.html">Services</a></li>
											<li><a href="service-single.html">Service Single</a></li>
										</ul>
									</li>
									<li><a href="#">Pages<i class="fa fa-angle-down"></i></a>
										<ul class="dropdown">
											<li><a href="about.html">About Us</a></li>
											<li><a href="destinations.html">Destinations</a></li>
											<li><a href="team.html">Team</a></li>
											<li><a href="testimonials.html">Testimonials</a></li>
											<li><a href="faq.html">Faq</a></li>
											<li><a href="404.html">404 Page</a></li>
										</ul>
									</li>
									<li><a href="#">Blogs<i class="fa fa-angle-down"></i></a>
										<ul class="dropdown">
											<li><a href="blog-grid.html">Blog Grid</a></li>
											<li><a href="blog-grid-sidebar.html">Blog Grid Sidebar</a></li>
											<li><a href="blog-classic.html">Blog Classic</a></li>
											<li><a href="blog-grid-sidebar.html">Blog Classic Sidebar</a></li>
											<li><a href="blog-single.html">Blog Single</a></li>
											<li><a href="blog-single-sidebar.html">Blog Single Sidebar</a></li>
										</ul>
									</li>
									<li><a href="c ontact.html">Contact Us</a></li>-->
								<!-- </ul> -->
							</nav>
						</div>
						<!--/ End Main Menu -->
					</div>
				</div>
			</div>
		</div>
		<!--/ End Header Bottom -->
    </header>
	<!--/ End Header Area -->