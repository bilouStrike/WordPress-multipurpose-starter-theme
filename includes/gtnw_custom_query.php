<?php

class gtnw_custom_query {

	public $posts = array() ;

	public function __construct($query_type)
	{
		$this->get_the_custom_query($query_type);
	}
	public function get_the_custom_query($query_type)
	{
		$category = get_category( get_query_var( 'cat' ) );
		$cat_id = $category->cat_ID;
		// Switch by $query type to get the posts list
		switch ($query_type) {
			case 'latest_per_category':
				$args = array('cat' => $cat_id , 'orderby' => 'post_date' , 'order'   => 'DESC');
			break;
			case 'most_share':
				
			break;
			case 'most_views':
				$args = array('cat' => $cat_id , 'posts_per_page' => 4 , 'meta_key' => 'gtnw_post_views_counter', 'orderby' => 'meta_value_num', 'order' => 'DESC'); 
			break;
			
			default:
				# code...
				break;
		}
		// run and set the attributes of the custom query 
		$q = new WP_Query( $args);
		if ( $q->have_posts() ) {
		    while ( $q->have_posts() ) {
		    $q->the_post();        
		       $this->posts[get_the_id()]['title'] = get_the_title() ;
		       $this->posts[get_the_id()]['date'] = get_the_date() ; 
		    }
		    wp_reset_postdata();
		}
	}
		

}