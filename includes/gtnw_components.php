<?php

/**
 * This class for components control
 */
class gtnw_components
{
	/**
	* This function use to load and render component
	* @param $component component class name 
	* @param $option_name value to check if the component i enable by theme panel 
	* @param $attr component attributes
	*/
	public static function get_component($component , $option_name)
	{
		// check if the component is enable
		if(gtnw_options::get_the_option($option_name) == 'show')
		{
			return new $component();
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

	public static function gtnw_text_logo( $style , $class )
	{
		
	}

	public static function gtnw_posts_pagination()
	{
		/*$path = self::$GUTENWORD_COMPONENTS.'/posts_pagination.php';
		gtnw_section_helper::load_the_style('posts_pagination',$path);
		*/
	}

	
}

?>