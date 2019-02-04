<?php
/**
 * Gtnw_sections_helper
 */
class gtnw_section_helper
{
	private static $activate_section = array();
	private static $section_style_path =  array(
		'header' 			=> GUTENWORD_THEME_DIR .'/parts/header' ,
		'posts_loop'		=> GUTENWORD_THEME_DIR .'/parts/posts_loop_style',
		'topbar'			=> GUTENWORD_THEME_DIR .'/parts/header',
		'footer'			=> GUTENWORD_THEME_DIR .'/parts/header',
		'post_style'		=> GUTENWORD_THEME_DIR .'/parts/single',
	);

    public static function activation_section_style($section)
    {
    	switch ($section) {
    		case 'header':
    			self::$activate_section[$section] = gtnw_options::get_the_option('gtnw_header_style');
    			break;
    		case 'posts_loop':
    			self::$activate_section[$section] = gtnw_options::get_the_option('gtnw_posts_loop_style');
    			break;
    		case 'footer':
    			self::$activate_section[$section] = gtnw_options::get_the_option('gtnw_footer_style');
    			break;
    		case 'topbar':
    			self::$activate_section[$section] = gtnw_options::get_the_option('gtnw_topbar_style');
    			break;
    		case 'post_style':
    			self::$activate_section[$section] = gtnw_options::get_the_option('gtnw_single_post_style');
    			break;
    		default:
    			// throw error
    			break;
    	}
    }

 	public function load_the_style( $style_name , $style_path )
	{
		if(!empty($style_name) && file_exists($style_path))
		{
			load_template($style_path);
		}
		else
		{
			echo 'The file : '.$style_path.' not exists!';
		}
	}

    public static function _show_the_section( $section , $default_section)
    {
    	self::activation_section_style($section);
		if(empty(self::$activate_section[$section]))
			{
				self::$activate_section[$section] = $default_section ;
			}
		$style_name = self::$activate_section[$section];
		$style_path = self::$section_style_path[$section].'/'.$style_name.'.php';
		self::load_the_style( $style_name , $style_path );
    }

    public static function show_the_header_section()
	{
		self::_show_the_section('header', DEFAULT_HEADER_STYLE);
	}

	public static function show_the_posts_loop()
	{
		self::_show_the_section('posts_loop' , DEFAULT_POSTS_LOOP_STYLE);
	}

	public static function show_the_single()
	{
		self::_show_the_section('post_style' , DEFAULT_SINGLE_TEMPLATE);
	}

	public static function show_the_footer()
	{
		self::_show_the_section('footer' , DEFAULT_FOOTER_STYLE);
	}

	public static function show_the_topbar()
	{
		if( gtnw_options::get_the_option('gtnw_topbar_view') == 'off' )
		{
			return;
		}
		self::_show_the_section('topbar' , DEFAULT_TOPBAR_STYLE);
	}

	public static function the_category_header()
	{
		if (gtnw_options::get_the_option('gtnw_category_header') == 'off' )
		{
			return;
		}
		load_template(GUTENWORD_THEME_DIR .'/parts/category/category_header_section.php');
	}

	public static function the_signle_header()
	{
		if( gtnw_options::get_the_option('gtnw_header_single') == 'off' )
		{
			return;
		}
		load_template(GUTENWORD_THEME_DIR .'/parts/single/header_single.php');
	}

	public static function the_signle_footer()
	{
		if( gtnw_options::get_the_option('gtnw_footer_single') == 'off' )
		{
			return;
		}
		load_template(GUTENWORD_THEME_DIR .'/parts/single/footer_single.php');
	}

	public static function the_signle_body()
	{
		load_template(GUTENWORD_THEME_DIR .'/parts/single/body_single.php');
	}
	
}

?>
