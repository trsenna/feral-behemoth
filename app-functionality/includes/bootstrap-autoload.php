<?php

namespace App\Functionality;

use function App\Foundation\autoload_psr4;

# ------------------------------------------------------------------------------
# Run the PSR-4 autoloader.
# ------------------------------------------------------------------------------
#
# Registers a set of PSR-4 directories for a given namespace,
# replacing any others previously set for this namespace.
#

autoload_psr4( 'App\\Functionality\\', __DIR__ . '/src/' );
