<?php
/**
 * GutenWord Theme functions and definitions
 *
 * @package GutenWord_Theme 1.0
 * @since 1.0.0
 *
 */

// To prevent direct script access.
if ( ! defined( 'ABSPATH' ) ) {
	die( 'No direct script access allowed' );
}
// bootstrap style

// Setup the theme
require_once('includes/setup.php');

// Autoloading classes
require_once('includes/autoload.php');

// load constants 
require_once('includes/constants.php');

// Options manager 
require_once('includes/gtnw_options.php');

// styles and scripts
require_once('includes/load_enqueue.php');

// Configration values
require_once('includes/gtnw_config.php');

// helpers class
require_once('includes/gtnw_helpers.php');

// Ajax 
require_once('includes/gtnw_ajax.php');

// Components system 
require_once('includes/gtnw_components.php');

// Autoloading classes
require_once('includes/autoload.php');

/*add_filter( 'template_include', 'var_template_include', 1000 );
function var_template_include( $t ){
    $GLOBALS['current_theme_template'] = basename($t);
    return $t;
}

function get_current_template( $echo = false ) {
    if( !isset( $GLOBALS['current_theme_template'] ) )
        return false;
    if( $echo )
        echo $GLOBALS['current_theme_template'];
    else
        return $GLOBALS['current_theme_template'];
}
*/





// load theme function
if (is_admin())
{
  require_once('includes/admin/gtnw_panel.php');
}

?>

