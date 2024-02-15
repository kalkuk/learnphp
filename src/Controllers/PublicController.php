<?php
namespace App\Controllers;

class PublicController {
    public function index(){
        $name = 'Merle';
        $list = ['sai', 'leib', 'piim', 'viin'];
        include './index.php';
    }

    public function about(){
        include './about.php';
    }

    public function contacts(){
        include './contacts.php';
    }
}