<?php
/**
 * The template for displaying posts category
 *
 * @package GutenWord
 * @since 1.0.0
 */
?>
<div id="container" class="container">
<?php get_header(); 
		
	Gtnw_helpers::show_category_header();
	Gtnw_helpers::show_the_posts_loop();
	get_sidebar();
 ?>
</div>
<?php get_footer(); ?>