<?php

function gtnw_setup_theme()
{
	add_theme_support( 'custom-logo' );
	add_theme_support( 'menus' );
	register_nav_menus( array(
		'header-menu' => 'Header Menu',
		'footer-menu' => 'Footer Menu',
	));
}
add_action('after_setup_theme' , 'gtnw_setup_theme');

?>