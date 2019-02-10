<?php

class ad
{
	// Rendering ad component : return the code
	static function render($attr)
	{
		$ad = gtnw_options::get_the_option('gtnw_ad');
		echo $ad['ad_code'];
	}
}


?>