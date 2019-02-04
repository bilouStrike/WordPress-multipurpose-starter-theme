<?php
class gtnw_panel {

  	public function __construct()
  	{
		add_action('admin_menu', array($this,'setup_theme_panel'));
	}
	public function setup_theme_panel()
	{
	 	add_menu_page('GutenWord' , 'GutenWord' , 'edit_posts' , 'gtnw_panel_page' , array('gtnw_panel' , 'gtwn_display_panel_page'));
	}
  	public static function gtwn_display_panel_page()
	{
		?>
		<div class="wrap" style="background-color: #f5f5f5; padding:15px;">
			<h2 class="title"> GutenWord theme panel : </h2>
			<div class="load"></div>
			<div id="saved" class="alert alert-success"> Success update! 
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				   <span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div id="error" class="alert alert-danger"> oops! Try again 
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				   <span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="POST" action="admin-post.php" id="gtnw_theme_panel_form" enctype="multipart/form-data">
				<input type="hidden" name="action" value="gtnw_process_options">
				<?php  wp_nonce_field('gtnw_token_key'); ?>
				<?php require_once 'header.php';?>
				<?php require_once 'category.php';?>
				<?php require_once 'single_post.php';?>
				<input type="submit" name="process" value="submit">
			</form>	
		</div>
		<?php
	}
	
}
new gtnw_panel();

?>