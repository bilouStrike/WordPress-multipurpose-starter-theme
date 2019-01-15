<?php
/**
 * gtnw_option singlton
 * load options by name  
*/
class gtnw_options {
	/**
	 * @var to store options
	*/
	public static $gtnw_options; 
	/**
	 * @var to store options in local
	*/
	public function get_the_option($option_name , $default = '')
	{
		if(!isset($gtnw_options[$option_name]))
		{
			gtnw_options::$gtnw_options[$option_name] = get_option($option_name);
		}
		return $gtnw_options[$option_name] ;
	}
	/**
	* update option value
	*/
	public function update_the_option($option_name , $new_value)
	{
		update_option($option_name , $new_value);
	}
	/**
	* Get all availabel options in local.
	*/
	public function get_all_options()
	{
		return gtnw_options::$gtnw_options;
	}
	

}

?>