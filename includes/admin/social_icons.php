<div class="form-group">
	<label> Enabled Social icon component : </label><br>
	<input type="hidden" name="gtnw_cmpnt_social_icons" value="hide"> 
	<input type="checkbox" name="gtnw_cmpnt_social_icons" value="show" <?php if(gtnw_options::$gtnw_options['gtnw_cmpnt_social_icons'] == 'show' ) { echo 'checked'; } ?> > Enabled the social icon topBar
	<?php
	foreach (gtnw_config::$global_config['gtnw_social_icons_list'] as $name => $value) {
	?>
	<label> <?php echo $value['name'] ; ?> link :</label> <br/>
	<input type="text" name="gtnw_social_icons[<?php echo $name; ?>][link]" >
	<input type="hidden" name="gtnw_social_icons[<?php echo $name; ?>][show]" value="off"> 
	<input type="checkbox" name="gtnw_social_icons[<?php echo $name; ?>][show]" value="on" > Enable <?php echo $value['name'] ; ?>
	<?php
	}
	?>
</div>

