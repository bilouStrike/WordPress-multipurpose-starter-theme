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
    		default:
    			// throw error
    			break;
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
		$header_file = self::$activate_section['header'];
		load_template(GUTENWORD_THEME_DIR .'/parts/header/'.$header_file.'.php');
	}

	public static function show_the_posts_loop()
	{
		// Get the activate posts-loop style (index,category pages)
		self::activation_section_style('posts_loop');
		if(empty(self::$activate_section['posts_loop']))
			{
				self::$activate_section['posts_loop'] = DEFAULT_POSTS_LOOP_STYLE ;
			}
		$header_file = self::$activate_section['posts_loop'];
		load_template(GUTENWORD_THEME_DIR .'/parts/posts_loop_template/'.$header_file.'.php');
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
		$topbar_style = self::$activate_section['topbar'];
		load_template(GUTENWORD_THEME_DIR .'/parts/header/'.$topbar_style.'.php');
	}
	public static function show_the_footer_section()
	{
		
	}
	

}

?>
