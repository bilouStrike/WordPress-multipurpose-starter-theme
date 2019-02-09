<?php
/**
 * gtnw_option singlton pattern
 * load options by name  
*/
class gtnw_options {
	/**
	* @var to store options localy
	*/
	public static $gtnw_options = array(); 
	
	public function __construct()
	{
		$options = get_option('gtnw_options');
		self::$gtnw_options = $options;
	}

	public static function get_the_option($option_name , $default = '')
	{
		if(empty((self::$gtnw_options[$option_name])))
		{
			echo $option_name.' : i call from db';
			$options = get_option('gtnw_options');
			self::$gtnw_options[$option_name] = $options[$option_name];
		}
		return self::$gtnw_options[$option_name] ;
	}
	/**
	* update option value localy
	*/
	public static function update_the_option($option_name , $new_value)
	{
		self::$gtnw_options[$option_name] = $new_value;
	}
	/**
	* Get all options stored in local.
	*/
	public function get_all_options()
	{
		return self::$gtnw_options;
	}
	/**
	* db update options 
	*/
	public function do_update()
	{
		update_option('gtnw_options' , self::$gtnw_options);
	}
}
new gtnw_options();

?>