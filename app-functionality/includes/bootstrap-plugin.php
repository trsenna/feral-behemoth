<?php

namespace App\Functionality;

# ------------------------------------------------------------------------------
# Register service providers.
# ------------------------------------------------------------------------------
#
# Before booting the application, add any service providers that are
# necessary for running the plugin.
#

plugin()->register( new Assets() );


# ------------------------------------------------------------------------------
# Perform bootstrap actions.
# ------------------------------------------------------------------------------
#
# Creates an action hook for plugins (or even themes) to hook into the
# bootstrapping process.
#

do_action( 'app/functionality/bootstrap', plugin() );


# ------------------------------------------------------------------------------
# Bootstrap the plugin.
# ------------------------------------------------------------------------------
#
# Calls the theme `run()` method, which launches the plugin.
#

plugin()->run();
