<?php

/**
 * Ajax class 
 */
class Gtnw_ajax 
{
	public static function gtnw_otpions_process()
	{
		if (!check_ajax_referer('gtnw-security-nonce','gtnw_ajax_token')) {
			wp_send_json_error( 'Invalid security token sent.');
			echo 'security';
    		//wp_die();
		}
		sleep(1);
		parse_str($_POST['dataStored'], $searcharray);
		foreach ($searcharray as $name => $value) {
			gtnw_options::update_the_option($name , $value);
		}
		gtnw_options::do_update();
		wp_die(); 
	}
	public static function gtnw_posts_load_more()
	{
		// prepare our arguments for the query
		$args = json_decode( stripslashes( $_POST['query'] ), true );
		$args['paged'] = $_POST['page'] + 1; // next page to be loaded
		$args['post_status'] = 'publish';
	 	query_posts( $args );
	 	Gtnw_helpers::show_the_posts_loop();
		die;
	}
}
// Load more posts hook
add_action('wp_ajax_loadmore' , function(){
		Gtnw_ajax::gtnw_posts_load_more();
	});

// Ajax request to update options
	add_action('wp_ajax_gtnw_process_options' , function(){
		Gtnw_ajax::gtnw_otpions_process();
	});

?>