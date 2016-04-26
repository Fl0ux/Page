<?php

use Illuminate\Routing\Router;

/** @var Router $router */
if (! App::runningInConsole()) {
    $router->get('/', ['uses' => 'PublicController@homepage', 'as' => 'homepage'])->where('uri', '.*');
    $router->any('{uri}', ['uses' => 'PublicController@uri', 'as' => 'page'])->where('uri', '.*');
}
