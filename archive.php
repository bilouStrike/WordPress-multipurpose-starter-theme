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
		Gtnw_helpers::show_category_header();
		Gtnw_helpers::show_category_header_section();
		Gtnw_helpers::show_the_posts_loop();
		gtnw_components::gtnw_posts_pagination();	
 ?>
</div>
<?php get_footer(); ?>