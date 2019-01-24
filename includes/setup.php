<?php

function gtnw_setup_theme()
{
	add_theme_support( 'custom-logo' );
	add_theme_support( 'menus' );
	register_nav_menus( array(
		'topbar-menu' => 'Top Menu',
		'header-menu' => 'Header Menu', // Main menu
		'footer-menu' => 'Footer Menu',
	));
}
add_action('after_setup_theme' , 'gtnw_setup_theme');

?>