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
$router->add('{controller}/{action}');
$router->add('admin/{action}/{controller}');

//Display the routing table
echo '<pre>';
echo htmlspecialchars(print_r($router->getRoutes(), true));
echo '<pre>';
