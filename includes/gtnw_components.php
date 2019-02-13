<?php

/**
 * This class for components control
 */
class gtnw_components
{
	public static $instances = array();
	/**
	* This function use to load and render component
	* @param $component component class name 
	*/
	public static function get_component($component)
	{
		// Verify if class instant exist, if no : new instans and save it in array
		if (isset(self::$instances[$component]))
		{
			return self::$instances[$component];
		}
		else
		{
			$new_instance = new $component();
			self::$instances[$component] = $new_instance;
			return $new_instance;
		}
	}
	public static function gtnw_img_logo( $style , $class )
	{
		$url = gtnw_options::get_the_option('gtnw_logo');
		$alt = gtnw_options::get_the_option('gtnw_logo_alt');
		$custom_logo_id = get_theme_mod( 'custom_logo' );
		$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
		if ( has_custom_logo() ) {
		    echo '<img src="'. esc_url( $logo[0] ) .'">';
		} else if(!empty($url)) {
		    echo '<img src="'.$url.'" alt="'.$alt.'" class="'.$class.'">';
		} else {
			echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
		}
	}
}

?>