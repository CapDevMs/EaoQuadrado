<?php

namespace Core;

use App\Controllers\Controller;

class Router
{
    protected $routes = [];
    protected $namedRoutes = [];

    private function addRoute($route, $controller, $action, $method, $name = null)
    {
        $this->routes[$method][$route] = [
            'controller' => $controller,
            'action' => $action
        ];

        if ($name) {
            $this->namedRoutes[$name] = $route;
        }
    }

    public function get($route, $controller, $action, $name = null)
    {
        $this->addRoute($route, $controller, $action, "GET", $name);
    }

    public function post($route, $controller, $action, $name = null)
    {
        $this->addRoute($route, $controller, $action, "POST", $name);
    }

    public function route(string $name): ?string
    {
        return $this->namedRoutes[$name] ?? null;
    }

    public function dispatch()
    {
        $uri = strtok($_SERVER['REQUEST_URI'], '?');
        $method = $_SERVER['REQUEST_METHOD'];

        // Ajuste para path base (ex: localhost/EaoQuadrado/)
        if(strpos($uri, 'EaoQuadrado')) {
            $uri = str_replace('EaoQuadrado/', '', $uri);
        }

        $routes = $this->routes[$method] ?? [];

        foreach ($routes as $route => $handler) {
            $pattern = preg_replace('#\{[\w]+\}#', '([\w-]+)', $route);
            $pattern = "#^" . $pattern . "$#";

            if (preg_match($pattern, $uri, $matches)) {
                array_shift($matches); // Remove a URI completa

                $controller = new $handler['controller']();
                call_user_func_array([$controller, $handler['action']], $matches);
                return;
            }
        }

        Controller::errorPage();
    }

    public function getNamedRoutes(): array
    {
        return $this->namedRoutes;
    }
}
