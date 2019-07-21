<?php

# ------------------------------------------------------------------------------
# Bootstrap the theme.
# ------------------------------------------------------------------------------
#
# Maybe load the bootstrap files. Note that autoloading should happen
# first so that any classes/functions are available that we might need.
#

add_action( 'dalen/bootstrap/theme', function () {

    require_once( get_theme_file_path( 'includes/bootstrap-autoload.php' ) );
    require_once( get_theme_file_path( 'includes/bootstrap-theme.php' ) );

} );
