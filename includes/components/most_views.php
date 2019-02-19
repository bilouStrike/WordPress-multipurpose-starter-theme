<?php

class most_views extends component
{
	public function render($component_enable,$attr ='')
	{
		if(parent::check_component($component_enable))
		{
			//gtnw_custom_query::get_the_custom_query('latest_per_category');
			echo '<h3> Most views : </h3>' ;
			$latest = new gtnw_custom_query('most_views');
			foreach ($latest->posts as $key => $value) {
				echo 'Post title : '.$value['title']. 'Post date :'.$value['date']. '<br>' ;
			}
		}
	}
}

?>