<?php

/**
 * All theme configuration data
 */
class gtnw_config 
{
	public static $global_config =  array();

	// 
	const header_styles_group_name = 'gtnw_gp_header_styles' ;
	const topbar_styles_group_name = 'gtnw_gp_topbar_styles' ;
	const loop_styles_group_name = 'gtnw_gp_posts_loop_styles' ;
	const pagination_styles_group_name = 'gtnw_gp_pagination_styles' ;
	const single_post_styles_group_name = 'gtnw_gp_single_post_styles' ;

	public static function global_setter()
	{
		self::header_styles();	
		self::topbar_styles();
		self::loop_posts_styles();
		self::pagination_component_styles();
		self::single_posts_styles();
	}

	/**
	* This function to get group of setting by name
	* @return array
	*/
	public static function get_global_config($group_name)
	{
		if (empty(self::$global_config[$group_name]))
		{
			// throw error 
			echo 'No '. $group_name. ' setting values ' ;
			return;
		}
		return self::$global_config[$group_name];
	}

	/**
	* This helper to create our global array of settings
	* @param string , array
	* @return void
	*/
	public function _add_config_data_helper($group_name , $item_id , $attr)
	{
		if (isset(self::$global_config[$group_name][$item_id]))
		{
			echo ' This '.$item_id.' config already exist';
			// thro error
			return;
		}
		self::$global_config[$group_name][$item_id] = $attr ;
	}

	/**
	* This function use to add all the header templates to the global array settings
	* @return void
	*/
	public static function header_styles()
	{
		self::_add_config_data_helper(self::header_styles_group_name , 'header_style_1' , array(
			'name'  		=> 'Header style 1',
			'img'			=> ''
		));
		self::_add_config_data_helper(self::header_styles_group_name , 'header_style_2' , array(
			'name'  => 'Header style 2',
			'img'	=> ''
		));
		self::_add_config_data_helper(self::header_styles_group_name , 'header_style_3' , array(
			'name'  => 'Header style 3',
			'img'	=> ''
		));
	}

	/**
	* This function use to add all the topbar templates to the global array settings
	* @return void
	*/
	public static function topbar_styles()
	{
		self::_add_config_data_helper(self::topbar_styles_group_name , 'topbar_style_1' , array(
			'name'  => 'Topbar style 1',
			'img'	=> ''
		));
		self::_add_config_data_helper(self::topbar_styles_group_name , 'topbar_style_2' , array(
			'name'  => 'Topbar style 2',
			'img'	=> ''
		));
	}

	/**
	* This function use to add all the loop templates to the global array settings
	* @return void
	*/
	public static function loop_posts_styles()
	{
		self::_add_config_data_helper(self::loop_styles_group_name , 'posts_loop_style1' , array(
			'name'  => 'loop style 1',
			'img'	=> ''
		));
		self::_add_config_data_helper(self::loop_styles_group_name , 'posts_loop_style2' , array(
			'name'  => 'Loop style 2',
			'img'	=> ''
		));
	}

	/**
	* This function use to add all the single templates to the global array settings
	* @return void
	*/
	public static function single_posts_styles()
	{
		self::_add_config_data_helper(self::single_post_styles_group_name , 'post_style_1' , array(
			'name'  => 'Single style 1',
			'img'	=> ''
		));
		self::_add_config_data_helper(self::single_post_styles_group_name , 'post_style_2' , array(
			'name'  => 'Single style 2',
			'img'	=> ''
		));
	}
	/**
	* Get all styles of pagination component
	*/
	public static function pagination_component_styles()
	{
		self::_add_config_data_helper(self::pagination_styles_group_name , 'normal_pagination' , array(
			'name'  => 'Normal',
			'img'	=> ''
		));
		self::_add_config_data_helper(self::pagination_styles_group_name , 'loadmore_pagination' , array(
			'name'  => 'Load more button',
			'img'	=> ''
		));
		self::_add_config_data_helper(self::pagination_styles_group_name , 'infinite_pagination' , array(
			'name'  => 'Inifinite with scroll',
			'img'	=> ''
		));
	}

}
?>