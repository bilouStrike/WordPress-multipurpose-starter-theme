<div class="form-group">
	<label> Header style :</label>
	<select name="gtnw_header_style" class="form-control">
	    <?php
	    	$headers_styles = gtnw_config::header_styles();
	        foreach ($headers_styles as $name => $value) {
	       	?>
	       		<option value="<?php echo $value; ?>" <?php if(gtnw_options::$gtnw_options['gtnw_header_style'] == $value) { echo 'selected'; } ?> > <?php echo $name; ?>  </option>
	       	<?php
		    }
	    ?>
	</select>
</div>
