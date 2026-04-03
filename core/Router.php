<?php

class Router
{
    private array $routes;

    public function __construct(array $routes)
    {
        $this->routes = $routes;
    }

    public function run(): void
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $uri = rtrim($uri, '/');

        if ($uri === '')
        {
            $uri = '/';
        }

        if(!isset($this->routes[$uri]))
        {
            http_response_code(404);
            echo 'Página não encontrada';
            exit;
        }

        [$controllerClass, $method] = $this->routes[$uri];

        $controller = new $controllerClass();
        $controller->$method();
    }
}