<?php

class component {

	protected function check_component($component_enable)
	{
		if( gtnw_options::get_the_option($component_enable) == 'show' ||  $component_enable == true )
		{
			return true;
		}
	}
}

?>