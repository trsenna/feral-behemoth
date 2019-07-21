<?php

# ------------------------------------------------------------------------------
# Checks if it's a safe environment.
# ------------------------------------------------------------------------------
#
# This section checks if minimal requirements is satisfied and notify
# by hooks if the environment is safe or unsafe.
#

add_action( 'plugins_loaded', function () {

    $safe = version_compare( $GLOBALS[ 'wp_version' ], '5.2', '>=' );
    $safe = $safe && version_compare( PHP_VERSION, '7.3', '>=' );

    if ( $safe ) do_action( 'app/foundation/compat/safe' );
    if ( !$safe ) do_action( 'app/foundation/compat/unsafe' );

}, PHP_INT_MIN );


# ------------------------------------------------------------------------------
# Maybe display error messages.
# ------------------------------------------------------------------------------
#
# Maybe display an error message based on wether minimum requirements
# wasn't met.
#

add_action( 'app/foundation/compat/unsafe', function () {
    add_action( 'admin_notices', function () {

        $plugin_data = get_plugin_data(
            APP_FOUNDATION_PLUGIN_FILE
        );

        printf(
            '<div class="error"><p>%s</p></div>',
            __( "Minimal requirements are not satisfied by {$plugin_data['Name']} plugin. Please, ask 
            for some help from your developer or just deactivate the plugin.", 'app-foundatoin' )
        );

    } );
} );
