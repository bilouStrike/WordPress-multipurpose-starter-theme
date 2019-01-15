<?php
/**
 * The template for displaying the page
 *
 * @package GutenWord
 * @since 1.0.0
 */
?>
<?php get_header(); ?>
	<div class="container">
		<?php if ( have_posts()): ?>
			<?php while (have_posts()) : the_post(); ?>
				<h3>
					<?php the_title(); ?>
				</h3>
				<h3>
					<?php the_content(); ?>	
				</h3>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
<?php get_footer(); ?>
		