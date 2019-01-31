<?php
	//require_once(GUTENWORD_THEME_DIR.'/includes/gtnw_single.php');
	$the_single_post = new gtnw_single($post);
	?>
	<h1>  <?php //echo $the_single_post->the_title();  ?> </h1>
	<?php
	while ( have_posts() ) :
		the_post();
		the_title();
		the_content();
	endwhile; // End of the loop.
?>