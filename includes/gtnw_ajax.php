<?php

/**
 * Ajax class 
 */
class gtnw_ajax 
{
	public static function gtnw_otpions_process()
	{
		if (!check_ajax_referer('gtnw-security-nonce','gtnw_ajax_token')) {
			wp_send_json_error( 'Invalid security token sent.');
    		wp_die();
		}
		parse_str($_POST['dataStored'], $searcharray);
		foreach ($searcharray as $name => $value) {
			gtnw_options::update_the_option($name , $value);
		}
		gtnw_options::do_update();
		wp_die(); 
	}
	public static function gtnw_posts_load_more()
	{
		$args = json_decode( stripslashes( $_POST['query'] ), true );
		$args['paged'] = $_POST['page'] + 1; // next page to be loaded
		$args['post_status'] = 'publish';
	 	query_posts( $args );
	 	gtnw_section_helper::show_the_posts_loop();
		die;
	}
}
// Load more posts hook
add_action('wp_ajax_loadmore' , function(){
	gtnw_ajax::gtnw_posts_load_more();
});
add_action('wp_ajax_nopriv_loadmore' , function(){
	gtnw_ajax::gtnw_posts_load_more();
});

// Ajax request to update options
if(is_admin())
{
	add_action('wp_ajax_gtnw_process_options' , function(){
		gtnw_ajax::gtnw_otpions_process();
	});
}

?>