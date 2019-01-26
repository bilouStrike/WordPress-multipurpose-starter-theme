<?php
/**
 * The template for displaying the index
 *
 * @package GutenWord
 * @since 1.0.0
 */
?>
<div id="container" class="container">
<?php get_header(); ?>
	
		<?php
		/*
		posts loop for index page
		*/
		Gtnw_helpers::show_category_header();
		Gtnw_helpers::show_the_posts_loop();
		?>
		<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
		