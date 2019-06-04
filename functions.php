<?php 
	function theme_name_scripts(){
		// scripts

		wp_enqueue_script('jquery.min',get_template_directory_uri() .'/js/jquery.min.js');
		wp_enqueue_script('jquery-migrate-3.0.0',get_template_directory_uri() .'/js/jquery-migrate-3.0.0.js');
		wp_enqueue_script('jquery-ui.min',get_template_directory_uri() .'/js/jquery-ui.min.js');
		wp_enqueue_script('popper.min',get_template_directory_uri() .'/js/popper.min.js');
		wp_enqueue_script('bootstrap.min',get_template_directory_uri() .'/js/bootstrap.min.js');
		wp_enqueue_script('bootstrap-datepicker',get_template_directory_uri() .'js/bootstrap-datepicker.js');
		wp_enqueue_script('steller.min',get_template_directory_uri() .'/js/steller.js');
		wp_enqueue_script('facnybox.min',get_template_directory_uri() .'/js/facnybox.min.js');
		wp_enqueue_script('circle-progress.min',get_template_directory_uri() .'/js/circle-progress.min.js');
		wp_enqueue_script('slicknav.min',get_template_directory_uri() .'/js/slicknav.min.js');
		wp_enqueue_script('niceselect.min',get_template_directory_uri() .'/js/niceselect.js');
		wp_enqueue_script('owl-carousel.min',get_template_directory_uri() .'/js/owl-carousel.js');
		wp_enqueue_script('magnific-popup.min',get_template_directory_uri() .'/js/magnific-popup.js');
		wp_enqueue_script('waypoints.min',get_template_directory_uri() .'/js/waypoints.min.js');
		wp_enqueue_script('wow.min',get_template_directory_uri() .'/js/wow.min.js');
		wp_enqueue_script('jquery-counterup.min',get_template_directory_uri() .'/js/jquery-counterup.min.js');
		wp_enqueue_script('ytplayer.min',get_template_directory_uri() .'/js/ytplayer.min.js');
		wp_enqueue_script('scrollup.min',get_template_directory_uri() .'/js/scrollup.js');
		wp_enqueue_script('easing.min',get_template_directory_uri() .'/js/easing.js');
		wp_enqueue_script('','https://maps.googleapis.com/maps/api/js?key=AIzaSyDnhgNBg6jrSuqhTeKKEFDWI0_5fZLx0vM');
		wp_enqueue_script('gmap.min',get_template_directory_uri() .'/js/gmap.min.js');
		wp_enqueue_script('active.min',get_template_directory_uri() .'/js/active.js');

		// scripts end

		// styles

		wp_enqueue_style('nice-select', get_template_directory_uri().'/css/nice-select.css');
		wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css');
		wp_enqueue_style('datepicker', get_template_directory_uri().'/css/datepicker.css');
		wp_enqueue_style('jquery-ui', get_template_directory_uri().'/css/jquery-ui.css');
		wp_enqueue_style('jquery.fancybox.min', get_template_directory_uri().'/css/jquery.fancybox.min.css');
		wp_enqueue_style('magnific-popup.min', get_template_directory_uri().'/css/magnific-popup.min.css');
		wp_enqueue_style('font-awesome', get_template_directory_uri().'/css/font-awesome.css');
		wp_enqueue_style('owl-carousel', get_template_directory_uri().'/css/owl-carousel.css');
		wp_enqueue_style('slicknav.min', get_template_directory_uri().'/css/slicknav.min.css');
		wp_enqueue_style('animate', get_template_directory_uri().'/css/animate.css');
		wp_enqueue_style('style', get_stylesheet_uri());
		wp_enqueue_style('reset', get_template_directory_uri().'/css/reset.css');
		wp_enqueue_style('responsive', get_template_directory_uri().'/css/responsive.css');



		// styles end



	}
	add_action('wp_enqueue_scripts','theme_name_scripts');

	//Primary Menu

	register_nav_menu( 'head_menu',"Primary menu");
 		

 	add_theme_support('post-tumbnails');	
	

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 