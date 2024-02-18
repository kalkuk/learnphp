<?php
namespace App\Controllers;

use App\Models\User;
use App\DB;

class UsersController {

    public function __construct() {
        if(!auth()) {
            header('Location: /login');
        }
    }

    public function index() {  
        $users = User::all();
        include 'views/users/index.php';
    }

    public function create() {
        include 'views/users/create.php';
    }

    public function store() {
        $user= new User();
        $user ->email = $_POST['email'];
        $user ->password = $_POST['password'];
        $user ->save();
        header('Location: /admin/users');
    
    }

    public function show() {
        $user = User::find($_GET['id']);
        include 'views/users/show.php';
    }

    public function edit() {
        $user = User::find($_GET['id']);
        include 'views/users/edit.php';
    }

    public function update() {
        $user = User::find($_GET['id']);
        $user ->email = $_POST['email'];
        $user ->password = $_POST['password'];
        $user ->save();
        header('Location: /admin/users');
    }

    public function destroy() {
        $user = User::find($_GET['id']);
        $user->delete();
        header('Location: /admin/users');
    }
}