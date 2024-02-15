<?php
namespace App\Models;

class Article extends Model{
    public static $table = 'users';
    public $id;
    public $email;
    public $password;
}