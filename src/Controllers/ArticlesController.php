<?php
namespace App\Controllers;

use PDO;
use PDOException;

class ArticlesController {
    public function index(){
        try {
            $conn = new PDO("sqlite:db.sqlite");
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
          } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
          }
    }
}