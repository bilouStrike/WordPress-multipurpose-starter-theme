<?php
if ( has_nav_menu('topbar-menu') )
{  
	wp_nav_menu(array('menu'=> $gtnw_topbar_menu_selected , 'theme_location' => 'topbar-menu'));                                                 
}
?>