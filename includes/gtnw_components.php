<?php

/**
 * This class for components control
 */
class gtnw_components
{
	private static $components_path = GUTENWORD_COMPONENTS;
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
		$path = self::$components_path.'/posts_pagination.php';
		gtnw_section_helper::load_the_style('posts_pagination',$path);
	}
	
}


?>