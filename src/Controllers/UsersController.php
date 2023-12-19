<?php

namespace App\Controllers;

use App\Exceptions\NotFoundException;
use App\Models\User;

class UsersController
{
    public function index()
    {
        $users = User::all();
        if ($users) {
            view('users/index', compact('users'));
        } else {
            throw new NotFoundException();
        }
    }
    function store()
    {
        $user = new User();
        $user->email = $_POST['email'];
        $user->password = $_POST['password'];
        $user->save();
        header('Location: /admin/users');
    }
    public function create()
    {
        view('users/create');
    }
    public function show()
    {
        $user = User::find($_GET['id']);
        if ($user) {
            view('users/show', compact('user'));
        } else {
            throw new NotFoundException();
        }
    }
    public function edit()
    {
        $user = User::find($_GET['id']);
        if ($user) {
            view('users/edit', compact('user'));
        } else {
            throw new NotFoundException();
        }
    }
    public function update()
    {
        $users = User::find($_GET['id']);
        $users->email = $_POST['email'];
        $users->password = $_POST['password'];
        $users->save();
        header('Location: /admin/users');
    }
    public function destroy()
    {
        $users = User::find($_GET['id']);
        $users->delete();
        header('Location: /admin/users');
    }
}
