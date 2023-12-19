<?php

namespace App\Models;

use App\DB;

class User extends Model {
    static $table = 'users';
    public $id;
    public $email;
    public $password;

    public static function auth(){
        if(isset($_SESSION['user'])){
            return User::find($_SESSION['user']);
        }
        return false;
    }
}