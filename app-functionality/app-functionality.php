<?php

/* ---------------------------------------------------------------------------------------------

	Plugin Name:    App Functionality
	Description:    The application functionality plugin.
	Author:         Thiago Senna
	Author URI:     https://thremes.com.br
	License:        GNU General Public License version 2.0
	License URI:    http://www.gnu.org/licenses/gpl-2.0.html
	Version:        0.1.0
	Requires PHP:   7.4

	This plugin, like WordPress, is licensed under the GPL.
	Use it to make something cool, have fun, and share what you've learned with others.

--------------------------------------------------------------------------------------------- */

use Dalen\Plugin;

define('APP_FUNCTIONALITY_PLUGIN', true);
define('APP_FUNCTIONALITY_PLUGIN_FILE', __FILE__);

# ------------------------------------------------------------------------------
# Lorem ipsum dolor sit amet
# ------------------------------------------------------------------------------
#
# Suspendisse sodales ipsum non justo imperdiet, ut lacinia erat
# cursus. Vestibulum dictum nisi ligula, in dictum justo pulvinar quis.
#

add_action('mazoo/bootstrap', function (Plugin $plugin) {
	// ...
});

# ------------------------------------------------------------------------------
# Lorem ipsum dolor sit amet
# ------------------------------------------------------------------------------
#
# Suspendisse sodales ipsum non justo imperdiet, ut lacinia erat
# cursus. Vestibulum dictum nisi ligula, in dictum justo pulvinar quis.
#

add_filter('mazoo/autoload/files', function (array $files) {
	return $files;
});
