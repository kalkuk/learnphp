<?php
namespace App\Controllers;

use App\Models\User;
use App\Models\Article;
use App\DB;

class ArticlesController {
    public function index(){
        
        $articles = Article::all();

    }
}