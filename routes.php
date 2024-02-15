<?php

// use App\Controllers\ArticlesController;
// use App\Controllers\PublicController;
use App\Router;

// Router::addRoute('/', [PublicController::class, 'index']);

// Router::addRoute('/about', [PublicController::class, 'about']);

// Router::addRoute('/contacts', [PublicController::class, 'contacts']);

// Router::addRoute('/articles', [ArticlesController::class, 'index']);
   
    
   
   Router::addRoute('/', function (){
        $name = 'Merle';
        $list =['sai', 'leib', 'piim', 'juust'];
        include "views/index.php"; 
    });

    Router::addRoute('/about', function (){
        include "views/about.php"; 
    });

    Router::addRoute('/contacts', function (){
        include "views/contacts.php"; 
    });

   