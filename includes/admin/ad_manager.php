<div class="form-group">
	<label> Enabled header AD : </label><br>
	<input type="hidden" name="gtnw_cmpnt_header_ad" value="hide"> 
	<input type="checkbox" name="gtnw_cmpnt_header_ad" value="show" <?php if(gtnw_options::$gtnw_options['gtnw_cmpnt_header_ad'] == 'show' ) { echo 'checked'; } ?> > Enabled the header AD
</div>
<div class="form-group">
	<label> header Ad code :</label><br>
	<textarea name="gtnw_ad[ad_code]" cols="45"> <?php if(isset(gtnw_options::$gtnw_options["gtnw_ad"]["hide_phone"] )) { echo gtnw_options::$gtnw_options["gtnw_ad"]["hide_phone"] ; } ?>  </textarea>
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