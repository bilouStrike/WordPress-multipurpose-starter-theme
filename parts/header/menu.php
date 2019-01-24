<?php
$gtnw_menu_selected = gtnw_options::$gtnw_options['gtnw_menu_selected'];
if ( has_nav_menu('header-menu') )
{
	wp_nav_menu(array('menu'=> $gtnw_menu_selected , 'theme_location' => 'header-menu'));                                                 
}

?>