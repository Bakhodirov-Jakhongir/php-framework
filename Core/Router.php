<?php

/**
 * Front Controller 
 */

class Router
{
    /**
     * Associative array of routes (the routing table)
     * @var array
     */
    protected $routes = [];

    /**
     * Parameters from the matched route
     * @var array
     */
    protected $params = [];

    /**
     * Add a route to the routing table
     * 
     * @param string $route The route URL
     * @param array $params Parameters (controller,actions,etc.)
     * 
     * @return void
     */
    public function add($route, $params): void
    {
        $this->routes[$route] = $params;
    }

    /**
     * Get all the routes from the routing table
     * @return @array
     */
    public function getRoutes(): array
    {
        return $this->routes;
    }

    /**
     * Match the route to the routes in the routing table,setting the $params
     * property if a rotue is found.
     * @param string $url The route URL
     * @return boolean true if a match found,false otherwise
     */
    public function match($url): bool
    {
        $reg_exp = "/^(?P<controller>[a-z-]+)\/(?P<action>[a-z-]+)$/";
        if (preg_match($reg_exp, $url, $matches)) {
            // Get named capture group values
            $params = [];
            foreach ($matches as $key => $match) {
                if (is_string($key)) {
                    $params[$key] = $match;
                }
            }
        }
        $this->params = $params;
        return true;
    }

    /**
     * Get the currently matched parameters
     */
    public function getParams(): array
    {
        return $this->params;
    }
}
