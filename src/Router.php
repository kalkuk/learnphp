<?php
namespace App;

use stdClass;

class Router{
    public static $routes = [];
    public static $currentRouter;
    public $path;
    public $firstDir;
    public $file;
    public $method;

    public function __construct($path, $method)
    {
        $this->path = parse_url($path, PHP_URL_PATH);
        $dirParts = explode('/', trim($this->path, '/'));
        $this->firstDir = '/' . array_shift($dirParts);
        $this->file = implode('/', $dirParts);
        $this->method = $method;
        static::$currentRouter = $this;
    }

    public static function getCurrent() {
        return static::$currentRouter;
    }

    public function match(){
        foreach(self::$routes as $route){
            if($route['path'] === $this->path && $route['method'] === $this->method){
                return $route;
            }
        }
        foreach(self::$routes as $route){
            if($route['path'] === $this->firstDir && $route['method'] === $this->method){
                return $route;
            }
        }   
    }
    
    public static function addRoute($method, $path, $action){
        self::$routes[] =[
            'method' => $method,
            'path' => $path,
            'action' => $action
        ];
    }
    public static function get($path, $action) {
        self::addRoute('GET', $path, $action);
    }

    public static function post($path, $action) {
        self::addRoute('POST', $path, $action);
    }
}