<div class="form-group">
	<label> header Ad code :</label><br>
	<textarea name="gtnw_ad[ad_code]" cols="45"></textarea>
</div>
<div class="form-group">
	<label> Hide on phone : </label><br>
	<input type="hidden" name="gtnw_ad[hide_phone]" value="off"> 
	<input type="checkbox" name="gtnw_ad[hide_phone]" value="on" <?php if(gtnw_options::$gtnw_options['gtnw_ad']['hide_phone'] == 'on' ) { echo 'checked'; } ?> > Hide on phone
</div>
<div class="form-group">
	<label> Hide on tablet : </label><br>
	<input type="hidden" name="gtnw_ad[hide_tablet]" value="off"> 
	<input type="checkbox" name="gtnw_ad[hide_tablet]" value="on" <?php if(gtnw_options::$gtnw_options['gtnw_ad']['hide_tablet'] == 'on' ) { echo 'checked'; } ?> > Hide on tablet
</div>