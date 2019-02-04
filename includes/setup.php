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
	
	add_theme_support( 'align-wide' );
	add_theme_support( 'editor-color-palette',
        array(
            'name' => 'dark blue',
            'color' => '#1767ef',
        ),
        array(
            'name' => 'light gray',
            'color' => '#eee',
        ),
        array(
            'name' => 'dark gray',
            'color' => '#444',
        )
    );
}
add_action('after_setup_theme' , 'gtnw_setup_theme');

?>