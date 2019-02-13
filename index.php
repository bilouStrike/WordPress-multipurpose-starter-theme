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
		gtnw_section_helper::the_category_header();
		gtnw_section_helper::show_the_posts_loop();
		gtnw_components::get_component('posts_pagination')->render(true);
		?>
		<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
		