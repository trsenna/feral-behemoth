<?php

namespace App\Functionality;

use Dalen\DI\ServiceLocator;
use Dalen\Plugin;
use Dalen\View\PluginViewLocate;
use Dalen\View\View;
use Dalen\View\ViewNames;

/**
 * Get the plugin instance.
 *
 * @return Plugin
 */
function plugin(): Plugin
{
    static $plugin;
    if ( !isset( $plugin ) ) {
        $locator = new ServiceLocator();
        $plugin = new Plugin( $locator );
    }

    return $plugin;
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
    $locator = plugin()->getServiceLocator();
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
        new PluginViewLocate( dirname( __DIR__ ) )
    );
}
