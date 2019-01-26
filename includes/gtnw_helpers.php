<?php
/**
 * Gtnw_helpers
 */
class Gtnw_helpers
{
	private static $activate_section = array();

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
    		case 'category_header':
    			self::$activate_section[$section] = gtnw_options::get_the_option('gtnw_category_header_style');
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

	public static function show_the_header_section()
	{
		// Get the activate header style (header template)
		self::activation_section_style('header');
		if(empty(self::$activate_section['header']))
			{
				self::$activate_section['header'] = DEFAULT_HEADER_STYLE ;
			}
		$style_name = self::$activate_section['header'];
		$style_path = GUTENWORD_THEME_DIR .'/parts/header/'.$style_name.'.php';
		self::load_the_style( $style_name , $style_path );
	}

	public static function show_the_posts_loop()
	{
		// Get the activate posts-loop style (index,category pages)
		self::activation_section_style('posts_loop');
		if(empty(self::$activate_section['posts_loop']))
			{
				self::$activate_section['posts_loop'] = DEFAULT_POSTS_LOOP_STYLE ;
			}
		$style_name = self::$activate_section['posts_loop'];
		$style_path = GUTENWORD_THEME_DIR .'/parts/posts_loop_style/'.$style_name.'.php';
		self::load_the_style( $style_name , $style_path );
	}

	public static function show_category_header()
	{
		self::activation_section_style('category_header');
		if(empty(self::$activate_section['category_header']))
			{
				self::$activate_section['category_header'] = DEFAULT_CATEGORY_HEADER_STYLE ;
			}
		$style_name = self::$activate_section['category_header'];
		$style_path = GUTENWORD_THEME_DIR .'/parts/category/'.$style_name.'.php';
		self::load_the_style( $style_name , $style_path );
	}

	public static function show_the_topbar()
	{
		$topbar_view = gtnw_options::get_the_option('gtnw_topbar_view');
		if( $topbar_view == 0 )
		{
			return;
		}
		self::activation_section_style('topbar');
		if(empty(self::$activate_section['topbar']))
			{
				self::$activate_section['topbar'] = DEFAULT_POSTS_LOOP_STYLE ;
			}
		$style_name = self::$activate_section['topbar'];
		$style_path = GUTENWORD_THEME_DIR .'/parts/header/'.$style_name.'.php';
		self::load_the_style( $style_name , $style_path );
	}

	public static function show_topbar_menu()
	{
		$gtnw_show_topbar_menu = gtnw_options::get_the_option('gtnw_topbar_menu');
		if( $gtnw_show_topbar_menu == 0 )
		{
			return;
		}
		load_template(GUTENWORD_THEME_DIR .'/parts/header/topbar_menu.php');
	}

	public static function show_topbar_social_icon()
	{
		$gtnw_topbar_social_icon = gtnw_options::get_the_option('gtnw_topbar_social');
		if( $gtnw_topbar_social_icon == 0 )
		{
			return;
		}
		load_template(GUTENWORD_THEME_DIR .'/parts/header/topbar_social.php');
	}

}

?>
