<?php 
	$pagination_style = gtnw_options::get_the_option('gtnw_pagination_style'); 
	switch ($pagination_style) {
		case 'normal_pagination':
			?>
			<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
			<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
			<?php
			break;
		case 'loadmore_pagination':
			global $wp_query; 
 			if (  $wp_query->max_num_pages > 1 )
				echo '<div class="gtnw_loadmore"> More posts </div>';
			break;
		default:
			break;
	}
 ?>
