<?php

namespace App\Foundation;

/**
 * Register a PSR-4 directory for a given namespace.
 *
 * @param $prefix
 * @param $base_dir
 */
function autoload_psr4( $prefix, $base_dir ): void
{
    spl_autoload_register( function ( $class ) use ( $prefix, $base_dir ) {

        $len = strlen( $prefix );
        if ( strncmp( $prefix, $class, $len ) !== 0 ) {
            return;
        }

        $relative_class = substr( $class, $len );
        $file = $base_dir . str_replace( '\\', '/', $relative_class ) . '.php';

        if ( file_exists( $file ) ) {
            require $file;
        }

    } );
}


/**
 * Scope isolated include.
 *
 * @param $file
 */
function include_file( $file ): void
{
    include $file;
}

# ------------------------------------------------------------------------------
# Run the PSR-4 autoloader.
# ------------------------------------------------------------------------------
#
# Registers a set of PSR-4 directories for a given namespace,
# replacing any others previously set for this namespace.
#

autoload_psr4( 'App\\Foundation\\', __DIR__ . '/src/' );
