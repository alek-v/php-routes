<?php

namespace App\Classes;

use App\Classes\Request;

class Route {
    private Request $request;

    public function __construct()
    {
        $this->request = new Request;
    }

    /**
     * Set routes, and values
     */
    public function __call($name, $args)
    {
        list($route, $method) = $args;
        $this->{strtolower($name)}[$this->getRoute($route)] = $method;
    }

    /**
     * Clean route name
     */
    private function getRoute($route)
    {
        if ($route == '/') {
            return $route;
        }

        return trim($route, '/');
    }

    /**
     * Resolves a route
     */
    private function resolve()
    {
        $request_method = $this->{strtolower($this->request->request_method)};
        $request_uri = $this->getRoute($this->request->request_uri);

        if (!isset($request_method[$request_uri])) {
            $this->pageNotFound();
        }

        if (!$this->isClosure($request_method[$request_uri]) && method_exists($request_method[$request_uri][0], $request_method[$request_uri][1])) {
            echo call_user_func([new $request_method[$request_uri][0], $request_method[$request_uri][1]]);
            return;
        }

        echo call_user_func($request_method[$request_uri]);
    }

    /**
     * Handle 404 page
     */
    private function pageNotFound()
    {
        echo 'Page not found';
    }

    /**
     * Detect if variable is a Closure
     */
    function isClosure($t): bool
    {
        if (($t instanceof \Closure) == true) {
            return true;
        }

        return false;
    }

    /**
     * Call a method to show the page
     */
    public function __destruct()
    {
        $this->resolve();
    }
}