<H2> category setting : </H2>
<div class="form-group">
	<label> Show / Hide Category header (Section)  : </label><br>
	<input type="hidden" name="gtnw_category_header" value="off"> 
	<input type="checkbox" name="gtnw_category_header" value="on" <?php if(gtnw_options::$gtnw_options['gtnw_category_header'] == 'on' ) { echo 'checked'; } ?>> Show Category header
</div>
<div class="form-group">
	<label> Category posts Style (Section) :</label>
	<select name="gtnw_posts_loop_style" class="form-control">
	    <?php
	    	$loop_styles = gtnw_config::get_global_config('gtnw_gp_posts_loop_styles');
	        foreach ($loop_styles as $name => $value) {
	       	?>
	       		<option value="<?php echo $name; ?>" <?php if(gtnw_options::$gtnw_options['gtnw_posts_loop_style'] == $name) { echo 'selected'; } ?> > <?php echo $name; ?>  </option>
	       	<?php
		    }
	    ?>
	</select>
</div>
<div class="form-group">
	<label> Pagination Style (Component):</label>
	<select name="gtnw_pagination_style" class="form-control">
	    <?php
	    	$pagination_styles = gtnw_config::get_global_config('gtnw_gp_pagination_styles');
	        foreach ($pagination_styles as $name => $value) {
	       	?>
	       		<option value="<?php echo $name; ?>" <?php if(gtnw_options::$gtnw_options['gtnw_pagination_style'] == $name) { echo 'selected'; } ?> > <?php echo $value['name']; ?>  </option>
	       	<?php
		    }
	    ?>
	</select>
</div>