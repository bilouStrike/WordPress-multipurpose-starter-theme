<?php

class gtnw_single 
{
	private $post = '';
	
	function __construct()
	{
		$this->post = $post ;
	}
	function the_title()
	{
		return get_the_title($this->post);
	}
	function the_author()
	{
		
	}
}



?>