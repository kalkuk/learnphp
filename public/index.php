<?php
switch($_SERVER['REQUEST_URI']){
     case '/':
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
}