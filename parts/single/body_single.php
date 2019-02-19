<?php
    global $post;
	while ( have_posts() ) :
		the_post();
		$the_single_post = new gtnw_single($post);
		$the_single_post->update_post_views();
		?>
		<div class="single-header"> <?php echo $the_single_post->the_title(); ?>  </div>
		<div class="single-content">
			<?php
			echo 'The author : '.$the_single_post->the_author().'<br>' ;
			echo $the_single_post->the_categories().'<br>' ;
			echo 'Tags : '.$the_single_post->the_tags().'<br>' ;
			echo 'Views : '.$the_single_post->the_post_view().'<br>' ;
			echo $the_single_post->the_content().'<br>' ;
			echo $the_single_post->the_date().'<br>' ;
			echo $the_single_post->the_comments().'<br>' ;		
			$the_single_post->the_post_pagination().'<br>' ;		
			?>
		</div>
		<div class="single-footer">
			<?php
				gtnw_components::get_component('next_prev_post')->render('gtnw_cmpnt_nextPrev_post');
			?>
		</div>
		<?php
	endwhile; // End of the loop.
?>