<div class="col-md-12">
<?php // Sample pagination ?>
<div class="nav-previous alignleft"><?php // next_posts_link( 'Older posts' ); ?></div>
<div class="nav-next alignright"><?php //previous_posts_link( 'Newer posts' ); ?></div>
<?php
// Load more pagination

global $wp_query; // you can remove this line if everything works for you
 
if (  $wp_query->max_num_pages > 1 )
	echo '<div class="gtnw_loadmore"> More posts </div>'; 
?>
</div>