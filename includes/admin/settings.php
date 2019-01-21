<?php
/*
class settings {

  public function __construct(){

  	$this->register_settings_and_fields();

  }
  public static function add_menu_page()
  {
  	add_menu_page('GutenWord' , 'GutenWord' , 'administrator' , 'gtnw_options_page' , array('settings' , 'display_options_page'));
  }
  public static function display_options_page()
  {
	?>
	<div class="wrap">
		<h2> Theme settings page : </h2>
		<form method="POST" action="options.php" enctype="multipart/form-data">
			<?php settings_fields('gtnw_panel_options'); ?>
			<?php do_settings_sections('gtnw_options_page'); ?>
			<?php submit_button(); ?>
		</form>	
	</div>
		<?php
  }
  public function register_settings_and_fields()
  {
  	register_setting('gtnw_panel_options' , 'gtnw_header_style');
  	add_settings_section('gtnw_main_section' , 'GutenWord Panel' , array($this , 'gtnw_main_section')  , 'gtnw_options_page');
    add_settings_field('gtnw_header_style' , 'Header style :' , array($this, 'gtnw_select_header_form') , 'gtnw_options_page' , 'gtnw_main_section');	
  }
  public function gtnw_main_section()
  {
    echo '<h2> GutenWord section </h2>';
  } 
  public function gtnw_select_header_form()
  {
    ?>
    <div class="form-group">
      <select name="gtnw_header_style">
        <option value="header_style_1"> Header style 1 </option>
        <option value="header_style_2"> Header style 2 </option>
      </select>
    </div>
    <?php
  }
}
add_action('admin_init',  function(){
  new settings();
});

add_action('admin_menu' , function(){
  settings::add_menu_page();
});
*/

?>