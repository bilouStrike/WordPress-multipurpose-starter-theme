<div class="row">
  <h5> Posts loop style 1 </h5>
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
 	<h5 class="bg-gray"> <?php the_title(); ?> </h5>
    <?php endwhile; ?>
	<?php endif; ?>
</div>