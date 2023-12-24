<?php

// echo "Hello World from PHP framework" . "<br>";

// echo "Requested URL = " . $_SERVER['QUERY_STRING'];


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

echo get_class($router);

//Add the rotues
$router->add('/', ['controller' => 'Home', 'action' => 'index']);
$router->add('posts', ['controller' => 'Posts', 'action' => 'index']);
$router->add('posts/new', ['controller' => 'Posts', 'action' => 'create']);

//Display the routing table

echo '<pre>';
var_dump($router->getRoutes());
echo '<pre>';
