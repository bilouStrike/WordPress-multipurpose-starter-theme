<?php

class ad
{
	// Rendering ad component : return the code
	static function render($attr)
	{
		$ad = gtnw_options::get_the_option('gtnw_ad');

		$output .= '<script type="text/javascript">' . "\n";
		$output .= 'jQuery(function($){';
		if (isset($ad['phone'] ) && $ad['hide_phone'] == 'on')
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


?>