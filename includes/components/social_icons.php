<?php

class social_icons extends gtnw_component
{
	/**
	* @param style 
	* Return only the activate social icons with their links.
	* 
	*/
	public function render($component_enable , $attr ='') {
		if(parent::check_component($component_enable))
		{
			$social_pages = gtnw_options::get_the_option('gtnw_social_icons');
			$output .= '<ul>';
			foreach ($social_pages as $page) {
				if($page['show'] == 'on')
				{
					$output .= '<li><a href="'.$page['link'].'"> '.$page['link'].' </a> </li>';
				}
			}
			$output .= '</ul>';
			echo $output;
		}
	}
}

?>