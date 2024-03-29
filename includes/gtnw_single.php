<?php

class gtnw_single 
{
	public $post;

	function __construct( $post )
	{
		if ( gettype( $post ) != 'object' or get_class( $post ) != 'WP_Post' ) {
            gtnw_system::throw_error(__FILE__ , 'This call is not WP_Post ');
            return;
        }
        $this->post = $post ;
		$this->single = is_single();
	}

	/**
	* Get the post title 
	* @return string
	*/
	function the_title()
	{
		return get_the_title( $this->post->ID );
	}

	/**
	* Get the post author name
	* @return string
	*/
	function the_author()
	{
		if ( gtnw_options::get_the_option( 'gtnw_show_author' ) == 'off' ) 
		{
			return;
		}
		return get_the_author( $this->post->ID );
	}

	/*
	* Get all post categories
	*/
	function the_categories()
	{
		if ( gtnw_options::get_the_option('gtnw_show_categories') == 'off' )
		{
			return;
		}
		$categories = get_the_category( $this->post->ID );
		$output = ' ' ;
		foreach ( $categories as $category ) {
			$output.= '<li>'.$category->name.'</li>' ;
		}
		$output.='</ul>';
		return $output;
	}

	/*
	* Get the post date by format
	*/
	function the_date()
	{
		if ( gtnw_options::get_the_option('gtnw_show_date') == 'off' )
		{
			return;
		}
		return get_the_date('l F j, Y' , $this->post);
	}

	/*
	* Get the post comments
	*/
	function the_comments()
	{
		if ( gtnw_options::get_the_option('gtnw_show_comments') == 'off' )
		{
			return;
		}
		$output = '<ul>';
		$args = array( 'post_id' => $this->post->ID );
		$comments = get_comments( $args );
		foreach ( $comments as $comment ) {
			$output.= '<li>'.$comment->comment_content.'</li>' ;
		}
		$output.='</ul>';
		return $output;
	}

	/*
	* Prepare and get the post content
	*/
	function the_content()
	{
		return get_the_content($this->post);
	}

	/**
	* Get post views count
	* @return integer
	*/
	function the_post_view()
	{
		/*if ( gtnw_options::get_the_option('gtnw_show_post_views') == 'off' )
		{
			return;
		}*/
		$count_key = 'gtnw_post_views_counter';
	    $count = get_post_meta($this->post->ID , $count_key, true);
	    if($count==''){
	        delete_post_meta($this->post->ID , $count_key);
	        add_post_meta($this->post->ID , $count_key, '0');
	        return "0 View";
	    }
	    return $count.' Views';
	}

	/**
	* Get the post tags
	* @return array
	*/
	function the_tags()
	{
		if ( gtnw_options::get_the_option('gtnw_show_post_tags') == 'off' )
		{
			return;
		}
		return get_the_tags( $this->post->ID );
	}

	/*
	* Post pagination for post split
	*/
	function the_post_pagination()
	{
		if ( !$this->is_single ) {
			return;
		}
		return wp_link_pages(array(
            'before' => '<div class="post-pagination">',
            'after' => '</div>',
            'link_before' => '<span>',
            'link_after' => '</span>',
            'nextpagelink'     => ' > ',
            'previouspagelink' => ' < '
        ));
	}

	/*
	* increment the post views 
	*/
	public function update_post_views()
	{
		global $page;
		$count_meta_key = 'gtnw_post_views_counter' ;
		if( is_single() && empty($page) || $page == 1  )
		{
			$count = get_post_meta($this->post->ID, $count_meta_key , true);
                if ($count == '') 
                {
                    update_post_meta($this->post->ID, $count_meta_key, 1);
                } else 
                {
                    $count++;
                    update_post_meta($this->post->ID, $count_meta_key, $count);
            	}
		}
	}

}


?>