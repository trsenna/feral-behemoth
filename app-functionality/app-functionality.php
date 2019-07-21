<?php
/**
 * Plugin Name: App Functionality
 * Author:      Thiago Senna
 * Author URI:  http://thremes.com.br
 * Description: The application functionality plugin.
 *
 * @package   App\Functionality
 */

define( 'APP_FUNCTIONALITY_PLUGIN', true );
define( 'APP_FUNCTIONALITY_PLUGIN_FILE', __FILE__ );


# ------------------------------------------------------------------------------
# Bootstrap the plugin.
# ------------------------------------------------------------------------------
#
# Maybe load the bootstrap files. Note that autoloading should happen
# first so that any classes/functions are available that we might need.
#

add_action( 'app/foundation/compat/safe', function () {

    require_once( __DIR__ . '/includes/bootstrap-autoload.php' );

} );
