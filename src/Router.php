<?php
namespace App;
class Router {
    private string $path;
    private string $method;
    static $routes = [];
    public function __construct(string $path, string $method)
    {
      $this->path = parse_url($path, PHP_URL_PATH);  
      $this->method = $method;   
    }

    public function match () {
        foreach(self::$routes as $route){
            if($route['path'] === $this->path && $route['method'] === $this->method){
                return $route;
            }
        }
        return false;
    }

    public static function addRoute(string $method, string $path, callable|array $action){
        self::$routes[] = ['method' => $method, 'path' => $path,'action' => $action];
    }

    public static function get(string $path, callable|array $action){
        self::addRoute('GET', $path, $action);
    }
    public static function post(string $path, callable|array $action){
        self::addRoute('POST', $path, $action);
    }
}