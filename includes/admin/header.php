<h2> Header settings :</h2>
<div class="form-group">
	<label> Header style (Section) :</label>
	<select name="gtnw_header_style" class="form-control">
	    <?php
	    	$headers_styles = gtnw_config::get_global_config('gtnw_gp_header_styles');
	        foreach ($headers_styles as $name => $value) {
	       	?>
	       		<option value="<?php echo $name; ?>" <?php if(gtnw_options::$gtnw_options['gtnw_header_style'] == $name) { echo 'selected'; } ?> > <?php echo $value['name']; ?>  </option>
	       	<?php
		    }
	    ?>
	</select>
</div>
<div class="form-group">
	<label> Show / Hide Topbar (Section): </label><br>
	<input type="hidden" name="gtnw_topbar_view" value="off"> 
	<input type="checkbox" name="gtnw_topbar_view" value="on" <?php if(gtnw_options::$gtnw_options['gtnw_topbar_view'] == 'on' ) { echo 'checked'; } ?>> Show topbar
</div>
<div class="form-group">
	<label> Topbar style (Section setting) :</label>
	<select name="gtnw_topbar_style" class="form-control">
	    <?php
	    	$topbar_styles = gtnw_config::get_global_config('gtnw_gp_topbar_styles');
	        foreach ($topbar_styles as $name => $value) {
	       	?>
	       		<option value="<?php echo $name; ?>" <?php if(gtnw_options::$gtnw_options['gtnw_topbar_style'] == $name) { echo 'selected'; } ?> > <?php echo $value['name'];  ?>  </option>
	       	<?php
		    }
	    ?>
	</select>
</div>
<div class="form-group">
	<label> LOGO (component): </label>
	<?php wp_enqueue_media(); ?>
	<div class='image-preview-wrapper'>
		<img id='image-preview' src='<?php echo gtnw_options::get_the_option('gtnw_logo'); ?>' width='200'>
	</div>
	<input id="upload_image_button" type="button" class="btn btn-info" value="<?php _e( 'Upload image' ); ?>" />
	<input type='hidden' name='gtnw_logo' id='gtnw_logo' value='<?php echo gtnw_options::get_the_option('gtnw_logo'); ?>'>
</div>
<div class="form-group">
	<label>LOGO alt :</label>
	<input type="text" name="gtnw_logo_alt" class="form-control">
</div>
<div class="form-group">
	<label> Text Logo (Component) :</label>
	<input type="text" name="gtnw_text_logo" class="form-control">
</div>

<div class="form-group">
	<label> Show Topbar menu (Component): </label><br>
	<input type="hidden" name="gtnw_topbar_menu" value="off"> 
	<input type="checkbox" name="gtnw_topbar_menu" value="on" <?php if(gtnw_options::$gtnw_options['gtnw_topbar_menu'] == 'on' ) { echo 'checked'; } ?>>  Topbar Menu
</div>
<div class="form-group">
	<label> Show Topbar Social Icon (Component) : </label><br>
	<input type="hidden" name="gtnw_topbar_social" value="off"> 
	<input type="checkbox" name="gtnw_topbar_social" value="on" <?php if(gtnw_options::$gtnw_options['gtnw_topbar_social'] == 'on' ) { echo 'checked'; } ?>>  Social icons
</div>
<div class="form-group">
	<label> Topbar menu (Component) : </label>
	<?php
		$created_menu = get_terms( 'nav_menu', array( 'hide_empty' => false ) );
	?>
	<select name="gtnw_topbar_menu_selected" class="form-control">
		<?php
		$created_menu = get_terms( 'nav_menu', array( 'hide_empty' => false ) );
		foreach ($created_menu as $menu_item) {
			?>
			<option value="<?php echo $menu_item->term_id; ?>"  <?php if(gtnw_options::$gtnw_options['gtnw_topbar_menu_selected'] == $menu_item->term_id) { echo 'selected'; } ?>> <?php echo $menu_item->name; ?> </option>
			<?php
		}
		?>	
	</select>
</div>	

<div class="form-group">
	<label> Select header menu (Component setting) : </label>
	<?php
		$created_menu = get_terms( 'nav_menu', array( 'hide_empty' => false ) );
	?>
	<select name="gtnw_menu_selected" class="form-control">
		<?php
		$created_menu = get_terms( 'nav_menu', array( 'hide_empty' => false ) );
		foreach ($created_menu as $menu_item) {
			?>
			<option value="<?php echo $menu_item->term_id; ?>"  <?php if(gtnw_options::$gtnw_options['gtnw_menu_selected'] == $menu_item->term_id) { echo 'selected'; } ?>> <?php echo $menu_item->name; ?> </option>
			<?php
		}
		?>	
	</select>
</div>	



