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

// Define our constants vars 
require_once('includes/constants.php');

// Autoloading classes
require_once('includes/autoload.php');

// load theme function
require_once('includes/admin/settings.php');


// load admin function

$args = array(
          'labels' => array(
              'name' => 'Headers' ,
              'singular_name' => 'header',
              'add_new' => 'Add your custom header',
              'add_new_item' => 'Add your header',
              'edit_item' => 'Edit header',
              'view_item' => 'View Header',
          ),
          'query_var' => 'gtnw_header',
          'rewrite' => array(
          'slug' => 'gtnw_header',
          ),
          'public' => true ,
          'has_archive' => true,
          'show_in_rest' => true, // Important !
          'menu_position' => 25,
          'supports' => array(
            'title',
            'editor',
          ),
        );

register_post_type('gtnw_header', $args);

?>

