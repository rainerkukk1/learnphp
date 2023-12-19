<?php
namespace App\Controllers;

use App\Models\User;

class AuthController {
    function register() {
        if($_POST['password'] === $_POST['password_confirm']){
            $user = new User();
            $user->email = $_POST['email'];
            $user->password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $user->save();
            header('Location: /login');
        } else {
            header('Location: /register');
        }

    }

    function registerForm() {
        view('auth/register');
    }

    function login() {
        // $user = null;
        // if(isset(User::where('email', $_POST['email'])[0])){
        //     $user = User::where('email', $_POST['email'])[0];
        // }

        $user = User::where('email', $_POST['email'])[0] ?? null;
        if($user && password_verify($_POST['password'], $user->password)){
            $_SESSION['user'] = $user->id;
            header('Location: /');
        } else{
            header('Location: /login');
        }

    }

    function loginForm() {
        view('auth/login');
    }

    function logout() {
        unset($_SESSION['user']);
        header('Location: /');
    }
}