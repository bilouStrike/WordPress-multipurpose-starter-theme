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
		//gtnw_helpers::the_signle_header();

		// Body (post content) style
		//gtnw_helpers::the_signle_body();

		// Footer dynamic section
		//gtnw_helpers::the_signle_footer();

		
		?>
		
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
		