<div class="form-group">
	<label> Post Style (Section) :</label>
	<select name="gtnw_single_post_style" class="form-control">
	    <?php
	    	$loop_styles = gtnw_config::get_global_config('gtnw_gp_single_post_styles');
	        foreach ($loop_styles as $name => $value) {
	       	?>
	       		<option value="<?php echo $name; ?>" <?php if(gtnw_options::$gtnw_options['gtnw_single_post_style'] == $name) { echo 'selected'; } ?> > <?php echo $value['name']; ?>  </option>
	       	<?php
		    }
	    ?>
	</select>
</div>
<div class="form-group">
	<label> Show the ahthor : </label><br>
	<input type="hidden" name="gtnw_show_author" value="off"> 
	<input type="checkbox" name="gtnw_show_author" value="on" <?php if(gtnw_options::$gtnw_options['gtnw_show_author'] == 'on' ) { echo 'checked'; } ?>>  Author name
</div>
<div class="form-group">
	<label> Show the categories : </label><br>
	<input type="hidden" name="gtnw_show_categories" value="off"> 
	<input type="checkbox" name="gtnw_show_categories" value="on" <?php if(gtnw_options::$gtnw_options['gtnw_show_categories'] == 'on' ) { echo 'checked'; } ?>>  Categories
</div>
<div class="form-group">
	<label> Show the date : </label><br>
	<input type="hidden" name="gtnw_show_date" value="off"> 
	<input type="checkbox" name="gtnw_show_date" value="on" <?php if(gtnw_options::$gtnw_options['gtnw_show_date'] == 'on' ) { echo 'checked'; } ?>>  Date
</div>
<div class="form-group">
	<label> Show the comments : </label><br>
	<input type="hidden" name="gtnw_show_comments" value="off"> 
	<input type="checkbox" name="gtnw_show_comments" value="on" <?php if(gtnw_options::$gtnw_options['gtnw_show_comments'] == 'on' ) { echo 'checked'; } ?>>  Comments
</div>
<div class="form-group">
	<label> Show the post views : </label><br>
	<input type="hidden" name="gtnw_show_post_views" value="off"> 
	<input type="checkbox" name="gtnw_show_post_views" value="on" <?php if(gtnw_options::$gtnw_options['gtnw_show_post_views'] == 'on' ) { echo 'checked'; } ?>>  Views
</div>
<div class="form-group">
	<label> Show Next / Prev post : </label><br>
	<input type="hidden" name="gtnw_show_next_prev" value="off"> 
	<input type="checkbox" name="gtnw_show_next_prev" value="on" <?php if(gtnw_options::$gtnw_options['gtnw_show_next_prev'] == 'on' ) { echo 'checked'; } ?>>  Next / Prev post
</div>
<div class="form-group">
	<label> Show the Tags : </label><br>
	<input type="hidden" name="gtnw_show_post_tags" value="off"> 
	<input type="checkbox" name="gtnw_show_post_tags" value="on" <?php if(gtnw_options::$gtnw_options['gtnw_show_post_tags'] == 'on' ) { echo 'checked'; } ?>>  Tags
</div>
