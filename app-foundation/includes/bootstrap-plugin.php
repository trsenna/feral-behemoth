<?php

namespace App\Foundation;

# ------------------------------------------------------------------------------
# Register service providers.
# ------------------------------------------------------------------------------
#
# Before booting the application, add any service providers that are
# necessary for running the plugin.
#

//plugin()->register( new About() );


# ------------------------------------------------------------------------------
# Perform bootstrap actions.
# ------------------------------------------------------------------------------
#
# Creates an action hook for plugins (or even themes) to hook into the
# bootstrapping process.
#

do_action( 'app/foundation/bootstrap', plugin() );


# ------------------------------------------------------------------------------
# Bootstrap the plugin.
# ------------------------------------------------------------------------------
#
# Calls the plugin `run()` method, which launches the plugin.
#

//plugin()->run();
