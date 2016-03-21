<?php
	//DEFINE DEFAULT TIME ZONE
	date_default_timezone_set ('America/Mexico_City');

	//DEFINE PATH
	define('CDN_PATH',get_bloginfo('template_directory'));
	define('VERSION','?v=');
	define('TEMPLATE_URI',get_template_directory_uri());
	define('TEMPLATE_DIR',get_template_directory());
	define('TEMPLATE_URL',get_bloginfo('template_url'));
	define('HOME_URL',esc_url(home_url('/')));

	// Remove Metas
	remove_action( 'wp_head', 'wp_generator' ) ;
	remove_action( 'wp_head', 'wlwmanifest_link' ) ;
	remove_action( 'wp_head', 'rest_output_link_wp_head' );
	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'feed_links', 2 );
	remove_action( 'wp_head', 'feed_links_extra', 3 );
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );

	//Add Filters
	add_filter( 'pre_comment_content', 'esc_html' ); 	
	add_filter( 'login_errors', 'no_wordpress_errors' );
	add_filter('redirect_canonical', 'stop_guessing');
	
	
	function no_wordpress_errors(){
		return 'GET OFF MY LAWN !! RIGHT NOW !!';
	}

	function stop_guessing($url) {
		if (is_404()) {
			return false;
		}
		return $url;
	}
	
	//Remove Admin Bar Frontend
	show_admin_bar( false );
	
	function default_theme_scripts(){
		//ADD STYLES
		wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css',VERSION, true);
		wp_enqueue_style( 'fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css',VERSION, true);
		
		//ADD THE SCRIPTS
		wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-2.2.2.min.js', VERSION, true); 
		wp_enqueue_script( 'migrate', 'https://code.jquery.com/jquery-migrate-1.2.1.min.js', VERSION, true); 
		wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js', VERSION, true );
		wp_enqueue_script( 'TweenMax', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js', VERSION, true );
	}
	
	add_action( 'wp_enqueue_scripts', 'default_theme_scripts' );
		