<?php
/**
 * Plugin Name: App Foundation
 * Author:      Thiago Senna
 * Author URI:  http://thremes.com.br
 * Description: The application foundation plugin.
 *
 * @package App\Foundation
 */

define( 'APP_FOUNDATION_PLUGIN', true );
define( 'APP_FOUNDATION_PLUGIN_FILE', __FILE__ );


# ------------------------------------------------------------------------------
# Compatibility check.
# ------------------------------------------------------------------------------
#
# Check that the site meets the minimum requirements for the plugin
# before proceeding.
#

require_once( __DIR__ . '/includes/bootstrap-compat.php' );


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
