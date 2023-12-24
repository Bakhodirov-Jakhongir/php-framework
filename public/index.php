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
