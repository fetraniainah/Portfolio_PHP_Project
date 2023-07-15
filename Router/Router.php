<?php
namespace Router;

class Router{
    protected $routes = [];

    public function __construct()
    {
        $this->loadRoutes();
    }

    protected function loadRoutes()
    {
        $this->routes = [
            '/' => 'Controller\HomeController@index',
            '/about' => 'Controller\HomeController@about',
            '/project' => 'Controller\HomeController@project',
            '/skills' => 'Controller\HomeController@skills',
            '/experience' => 'Controller\HomeController@experiences',
            '/cv' => 'Controller\HomeController@cv',
            '/contact' => 'Controller\HomeController@contact',
            '/notfound' => 'Controller\HomeController@notfound',
        ];
    }

    public function run()
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $method = $_SERVER['REQUEST_METHOD'];

        foreach ($this->routes as $route => $handler) {
            if ($route === $uri) {
                [$controller, $action] = explode('@', $handler);
                $controller = new $controller();
                $controller->$action();
                return;
            }
        }

        header("HTTP/1.0 404 Not Found");
        echo '404 Not Found';
    }
}