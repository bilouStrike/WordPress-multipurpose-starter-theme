<?php

class gtnw_component {

	protected function check_component($component_enable)
	{
		if( gtnw_options::get_the_option($component_enable) == 'show')
		{
			return true;
		}
	}
}

?>