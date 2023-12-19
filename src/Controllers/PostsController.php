<?php

namespace App\Controllers;

use App\Exceptions\NotFoundException;
use App\Models\Post;

class PostsController
{
    public function index()
    {
        $posts = Post::all();
        if ($posts) {
            view('posts/index', compact('posts'));
        } else {
            throw new NotFoundException();
        }
    }
    public function create()
    {
        view('posts/create');
    }
    public function store()
    {
        $posts = new Post;
        $posts->title = $_POST['title'];
        $posts->body = $_POST['body'];
        $posts->save();
        header('Location: /admin/posts');
    }
    public function show()
    {
        $post = Post::find($_GET['id']);
        if ($post) {
            view('posts/show', compact('post'));
        } else {
            throw new NotFoundException();
        }
    }
    public function edit()
    {
        $post = Post::find($_GET['id']);
        if ($post) {
            view('posts/edit', compact('post'));
        } else {
            throw new NotFoundException();
        }
    }
    public function update()
    {
        $posts = Post::find($_GET['id']);
        $posts->title = $_POST['title'];
        $posts->body = $_POST['body'];
        $posts->save();
    }
    public function destroy()
    {
        $posts = Post::find($_GET['id']);
        $posts->delete();
        header('Location: /admin/posts');
    }
}
