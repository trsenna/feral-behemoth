<?php

use Dalen\Theme;

define('APP_THEME', true);
define('APP_THEME_FILE', __FILE__);

# ------------------------------------------------------------------------------
# Lorem ipsum dolor sit amet
# ------------------------------------------------------------------------------
#
# Suspendisse sodales ipsum non justo imperdiet, ut lacinia erat
# cursus. Vestibulum dictum nisi ligula, in dictum justo pulvinar quis.
#

add_action('mezu/bootstrap', function (Theme $theme) {
    // ...
});

# ------------------------------------------------------------------------------
# Lorem ipsum dolor sit amet
# ------------------------------------------------------------------------------
#
# Suspendisse sodales ipsum non justo imperdiet, ut lacinia erat
# cursus. Vestibulum dictum nisi ligula, in dictum justo pulvinar quis.
#

add_filter('mezu/autoload/files', function (array $files) {
    return $files;
});
