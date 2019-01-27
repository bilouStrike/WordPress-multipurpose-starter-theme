<div class="row">
  <h3> Posts loop style </h3>
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
 	<?php the_title(); ?>
    <?php endwhile; ?>

	<?php gtnw_components::gtnw_posts_pagination(); ?>
 
	<?php endif; ?>
</div>
