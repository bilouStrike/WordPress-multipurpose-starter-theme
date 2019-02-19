<?php
/**
 * The template for displaying the posts
 *
 * @package GutenWord
 * @since 1.0.0
 */
?>
<div id="container" class="container">
<?php get_header(); ?>
		<?php
		// Header dynamic section
		global $post;
		//gtnw_single::update_post_views($post->ID);
		gtnw_section_helper::show_the_single();

		?>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
		