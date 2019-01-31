<H2> category setting : </H2>
<div class="form-group">
	<label> Category Header :</label>
	<select name="gtnw_category_header_style" class="form-control">
	    <?php
	    	$category_headers_styles = gtnw_config::category_header_styles();
	        foreach ($category_headers_styles as $name => $value) {
	       	?>
	       		<option value="<?php echo $value; ?>" <?php if(gtnw_options::$gtnw_options['gtnw_category_header_style'] == $value) { echo 'selected'; } ?> > <?php echo $name; ?>  </option>
	       	<?php
		    }
	    ?>
	</select>
</div>
<div class="form-group">
	<label> Show / Hide Category header  : </label><br>
	<input type="hidden" name="gtnw_cat_header_section" value="0"> 
	<input type="checkbox" name="gtnw_cat_header_section" value="1" <?php if(gtnw_options::$gtnw_options['gtnw_cat_header_section'] == 1 ) { echo 'checked'; } ?>> Show Category header
</div>
<div class="form-group">
	<label> Category Top posts Style :</label>
	<select name="gtnw_category_TopPosts_style" class="form-control">
	    <?php
	    	$category_topposts_styles = gtnw_config::category_top_posts_styles();
	        foreach ($category_topposts_styles as $name => $value) {
	       	?>
	       		<option value="<?php echo $value; ?>" <?php if(gtnw_options::$gtnw_options['gtnw_category_TopPosts_style'] == $value) { echo 'selected'; } ?> > <?php echo $name; ?>  </option>
	       	<?php
		    }
	    ?>
	</select>
</div>
<div class="form-group">
	<label> Category posts Style :</label>
	<select name="gtnw_posts_loop_style" class="form-control">
	    <?php
	    	$category_topposts_styles = gtnw_config::posts_loop_styles();
	        foreach ($category_topposts_styles as $name => $value) {
	       	?>
	       		<option value="<?php echo $value; ?>" <?php if(gtnw_options::$gtnw_options['gtnw_posts_loop_style'] == $value) { echo 'selected'; } ?> > <?php echo $name; ?>  </option>
	       	<?php
		    }
	    ?>
	</select>
</div>
<div class="form-group">
	<label> Pagination Style :</label>
	<select name="gtnw_pagination_style" class="form-control">
	    <?php
	    	$category_topposts_styles = gtnw_config::all_pagination_styles();
	        foreach ($category_topposts_styles as $name => $value) {
	       	?>
	       		<option value="<?php echo $value; ?>" <?php if(gtnw_options::$gtnw_options['gtnw_pagination_style'] == $value) { echo 'selected'; } ?> > <?php echo $name; ?>  </option>
	       	<?php
		    }
	    ?>
	</select>
</div>