<?php
namespace App\Controllers;

use App\Router;

class AssetController {
    public function show(){
        $router = Router::getCurrent();
        switch (substr($router->file, -4)) {
            case '.svg':
                $type = 'image/svg+xml';
                break;
            case '.png':
                $type = 'image/png';
                break;
            default:
                $type = 'text/html';
        }
        header('Content-type: ' . $type);
        readfile(__DIR__ . '/../../assets/' . $router->file);
        exit;
    }

 
}