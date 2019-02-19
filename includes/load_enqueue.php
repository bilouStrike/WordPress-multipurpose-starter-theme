<?php

add_action( 'wp_enqueue_scripts' , 'gtnw_theme_enqueue_styles');
add_action( 'wp_enqueue_scripts' , 'gtnw_loadmore_enqueue');
add_action( 'admin_enqueue_scripts', 'load_admin_script'); 

function gtnw_loadmore_enqueue()
{
	global $wp_query , $template ;

	if ( gtnw_options::get_the_option('gtnw_pagination_style') == 'loadmore_pagination' && basename( $template ) ==  'index.php'  ) {
  		wp_register_script( 'gtnw_loadmore', get_template_directory_uri() . '/js/gtnwloadmore.js?v='.time() , array('jquery'));
 		wp_localize_script( 'gtnw_loadmore', 'gtnw_loadmore_params', array(
		'ajaxurl' => admin_url( 'admin-ajax.php' ), //WordPress AJAX
		'posts' => json_encode($wp_query->query_vars), 
		'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
		'max_page' => $wp_query->max_num_pages
		));
 		wp_enqueue_script( 'gtnw_loadmore' );
 	}
}

function load_admin_script() 
{
	if( is_admin() ) {
		// Boosttrap css
		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
		
		// Admin style
  		wp_enqueue_style( 'style', get_template_directory_uri() . '/includes/admin/css/style.css?v='.time() );
  		
  		// Ajax update 
		wp_register_script( 'gtnw_ajax_handle', get_template_directory_uri() . '/includes/admin/js/admin.js?v='.time(), array('jquery'), null, true);	
		wp_enqueue_script( 'gtnw_ajax_handle');

		// Upload logo 
		wp_register_script( 'gtnw_logo_upload', get_template_directory_uri() . '/includes/admin/js/media_lib.js?v='.time(), array('jquery'), null, true);
		wp_enqueue_script( 'gtnw_logo_upload');	
		$params = array ( 'ajaxurl' => admin_url( 'admin-ajax.php' ) , 'gtnw_ajax_token'  => wp_create_nonce('gtnw-security-nonce'));
		wp_localize_script( 'gtnw_ajax_handle', 'params', $params );

		// checkbox switcher
  		wp_enqueue_style( 'switcher', get_template_directory_uri() . '/includes/admin/css/switcher.css?v='.time() );
  		wp_register_script( 'switcher_js', get_template_directory_uri() . '/includes/admin/js/jquery.switcher.min.js', array('jquery'), null, true);	
		wp_enqueue_script( 'switcher_js');

	}
}

function gtnw_theme_enqueue_styles() 
{
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
 	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' );
 	wp_register_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), null, true );	
	wp_enqueue_script( 'bootstrap_js');
}

?>