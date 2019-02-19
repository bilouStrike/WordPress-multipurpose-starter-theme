<?php
/**
 * This class for any util system
 */
class gtnw_system
{
	/**
     * Visitors will show only the error message without file path
     * @param $file
     * @param $message
     */
	static function throw_error( $file , $message , $detail = '' )
	{
		ob_start();
		$path = '';
		if (is_user_logged_in() and current_user_can('switch_themes')){
			$path = 'Path : '.$file ;
		}
		echo '<div class="soft_error_div"><h1> Error : </h1>
			<div class="error_detail">
				'.$message.'<br>
				'.$path.'
			</div>
		</div>';
		echo ob_get_clean();
	}

}

?>