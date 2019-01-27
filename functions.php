<?php
/**
 * GutenWord Theme functions and definitions
 *
 * @package GutenWord_Theme 1.0
 * @since 1.0.0
 *
 */

// To prevent direct script access.
if ( ! defined( 'ABSPATH' ) ) {
	die( 'No direct script access allowed' );
}
// bootstrap style
function gtnw_theme_enqueue_styles() {
	global $wp_query; 
 	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
 	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' );

 	// load more pagination
 	wp_register_script( 'gtnw_loadmore', get_template_directory_uri() . '/js/gtnwloadmore.js?v='.time() , array('jquery'));
 	wp_localize_script( 'gtnw_loadmore', 'gtnw_loadmore_params', array(
		'ajaxurl' => admin_url( 'admin-ajax.php' ), // WordPress AJAX
		'posts' => json_encode($wp_query->query_vars), // everything about your loop is here
		'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
		'max_page' => $wp_query->max_num_pages
	));
 	wp_enqueue_script( 'gtnw_loadmore' );

 	wp_register_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), null, true );	
	wp_enqueue_script( 'bootstrap_js');
 }
add_action( 'wp_enqueue_scripts', 'gtnw_theme_enqueue_styles');

// Setup the theme
require_once('includes/setup.php');

// load constants 
require_once('includes/constants.php');

// Options manager 
require_once('includes/gtnw_options.php');

// Configration values
require_once('includes/gtnw_config.php');
// helpers class
require_once('includes/gtnw_helpers.php');
// Ajax 
require_once('includes/gtnw_ajax.php');

// Components system 
require_once('includes/gtnw_components.php');

// Autoloading classes
require_once('includes/autoload.php');



// load theme function
if (is_admin())
{
  	function load_admin_script() {
	 	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
  		wp_enqueue_style( 'style', get_template_directory_uri() . '/includes/admin/css/style.css?v='.time() );

		wp_register_script( 'gtnw_ajax_handle', get_template_directory_uri() . '/includes/admin/js/admin.js?v='.time(), array('jquery'), null, true);	
		wp_enqueue_script( 'gtnw_ajax_handle');

		wp_register_script( 'gtnw_logo_upload', get_template_directory_uri() . '/includes/admin/js/media_lib.js?v='.time(), array('jquery'), null, true);
		wp_enqueue_script( 'gtnw_logo_upload');	

		$params = array ( 'ajaxurl' => admin_url( 'admin-ajax.php' ) , 'gtnw_ajax_token'  => wp_create_nonce('gtnw-security-nonce'));
		wp_localize_script( 'gtnw_ajax_handle', 'params', $params );
	}
	add_action( 'admin_enqueue_scripts', 'load_admin_script');
  	require_once('includes/admin/gtnw_panel.php');
}




?>

