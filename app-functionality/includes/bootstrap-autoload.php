<?php

namespace App\Functionality;

use Composer\Autoload\ClassLoader;
use function Composer\Autoload\includeFile;

# ------------------------------------------------------------------------------
# Run the Composer autoloader.
# ------------------------------------------------------------------------------
#
# Registers a set of PSR-4 directories for a given namespace,
# replacing any others previously set for this namespace.
#

$loader = new ClassLoader();
$loader->setPsr4( 'App\\Functionality\\', __DIR__ . '/src' );
$loader->register();


# ------------------------------------------------------------------------------
# Autoload functions files.
# ------------------------------------------------------------------------------
#
# Load any functions-files from the `/includes` folder that are needed.
#

includeFile( __DIR__ . '/functions-helpers.php' );
