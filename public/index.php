<?php

/**
 * Front Controller
 * 
 * PHP version 8.1
 */

/**
 * Routing
 */
require '../Core/Router.php';

$router = new Router();

//Add the rotues
$router->add('/', ['controller' => 'Home', 'action' => 'index']);
$router->add('posts', ['controller' => 'Posts', 'action' => 'index']);
$router->add('posts/new', ['controller' => 'Posts', 'action' => 'create']);

if ($router->match($_SERVER['QUERY_STRING'])) {
    var_dump($router->getParams());
}
