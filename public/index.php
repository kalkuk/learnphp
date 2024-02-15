<?php

spl_autoload_register(function ($class){
    $class = substr($class, 4);
    $class = str_replace('\\', '/', $class);
    require_once __DIR__ . "/../src/$class.php";
});

require_once __DIR__ . "/../routes.php";

use App\DB;

$router = new App\Router($_SERVER['REQUEST_URI']);
$match = $router->match();
if($match){
    if(is_callable($match['action'])){
        call_user_func($match['action']);
    } else if(is_array($match['action']) && count($match['action']) === 2){
        $class = $match['action'][0];
        $controller = new $class();
        $method =$match['action'][1];
        $controller->$method();

    }
    
} else {
    http_response_code(404);
    require 'views/404.php'; 
}
$db = new App\DB();
$controller = new App\Controllers\PublicController();
/* switch($_SERVER['REQUEST_URI']){
     case '/':
        $name = 'Merle';
        $list =['sai', 'leib', 'piim', 'juust'];
        include './index.php';
        break;
    case '/about':
        include './about.php';
        break;
    case '/contacts':
        include './contacts.php';
        break;
    default:
        http_response_code(404);
       include 'views/partials/404.php';
       break;
} */