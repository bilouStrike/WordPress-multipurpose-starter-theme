<?php
/**
 * spl_autoload_register to autoloading classes
 */
spl_autoload_register( function( $class_name ) {
	// All classes locate in includes folder
	$file_name = GUTENWORD_THEME_DIR.'/includes/'.$class_name . '.php';
	if ( file_exists( $file_name ) ) {
		require_once( $file_name );
	} 
});

?>