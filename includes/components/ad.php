<?php

class ad extends component
{
	public function render($component_enable,$attr ='')
	{
		if(parent::check_component($component_enable))
		{
			$ad = gtnw_options::get_the_option('gtnw_ad');
			$output .= '<script type="text/javascript">' . "\n";
			$output .= 'jQuery(function($){';
			if (isset($ad['hide_phone'] ) && $ad['hide_phone'] == 'on')
			{
				$output .= 'if (window.matchMedia("(max-width: 480px)").matches) {
	    		$(".ads-div").hide(); }';
			}
			if (isset($ad['hide_tablet'] ) && $ad['hide_tablet'] == 'on')
			{
				$output .= 'if (window.matchMedia("(max-width: 750px)").matches) {
	    		$(".ads-div").hide(); }   ';
			}
			$output .= '});'; // end jquery code
			$output .= '</script>';
	   		echo $output;
	   		echo $ad['ad_code'];
		}
	}
}


?>