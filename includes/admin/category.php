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