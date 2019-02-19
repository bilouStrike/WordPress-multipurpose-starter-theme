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
        //echo "string";
		gtnw_section_helper::the_category_header();
		gtnw_section_helper::show_the_posts_loop();
		gtnw_components::get_component('posts_pagination')->render(true);
		
		gtnw_components::get_component('latest_per_category')->render(true);
		gtnw_components::get_component('most_views')->render(true);
		
 ?>
</div>
<?php get_footer(); ?>