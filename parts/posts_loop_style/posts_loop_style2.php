<div class="row">
  <h3> Posts loop style 2 </h3>
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
 	<h1> <?php the_title(); ?> </h1>
 	
    <?php endwhile; ?>
	<?php endif; ?>
</div>
