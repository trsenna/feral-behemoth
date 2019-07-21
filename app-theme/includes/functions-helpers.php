<?php

namespace App\Theme;

use Dalen\DI\ServiceLocator;
use Dalen\Theme;
use Dalen\View\ThemeViewLocate;
use Dalen\View\View;
use Dalen\View\ViewNames;

/**
 * Get the theme instance.
 *
 * @return Theme
 */
function theme(): Theme
{
    static $theme;
    if ( !isset( $theme ) ) {
        $locator = new ServiceLocator();
        $theme = new Theme( $locator );
    }

    return $theme;
}


/**
 * Get the component instance from service locator.
 *
 * @param $key
 *
 * @return mixed|null
 */
function component( $key ): ?object
{
    $locator = theme()->getServiceLocator();
    $component = $locator->get( $key );

    return $component;
}


/**
 * Get a new view instance.
 *
 * @param string      $slug
 * @param string|null $name
 *
 * @return View
 */
function view( $slug, $name = null ): View
{
    return new View(
        new ViewNames( "resources/views/{$slug}", $name ),
        new ThemeViewLocate()
    );
}
