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
	<?php wp_enqueue_media(); ?>
	<div class='image-preview-wrapper'>
		<img id='image-preview' src='<?php echo gtnw_options::get_the_option('gtnw_logo'); ?>' width='200'>
	</div>
	<input id="upload_image_button" type="button" class="btn btn-info" value="<?php _e( 'Upload image' ); ?>" />
	<input type='hidden' name='gtnw_logo' id='gtnw_logo' value='<?php echo gtnw_options::get_the_option('gtnw_logo'); ?>'>
</div>