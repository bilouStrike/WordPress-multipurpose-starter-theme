<?php
/**
 * spl_autoload_register to autoloading classes
 */
spl_autoload_register( function( $class_name ) {
	// Components classes are locate in includes / components
	$class_file = GUTENWORD_INCLUDES.'/'.$class_name . '.php';
	$component_file = GUTENWORD_COMPONENTS.'/'.$class_name . '.php';

	if ( file_exists( $class_file ) ) {
		require_once( $class_file );
	} 
	elseif (file_exists( $component_file ))
	{
       require_once ( $component_file );
	}
});

?>