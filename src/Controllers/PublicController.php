<?php
namespace App\Controllers;


use App\DB;
use App\Models\Post;

class PublicController{

    public function index(){

        $posts = Post::all();
        view('index', compact('posts'));
    }
    public function about(){
        view('about');
    }
    public function form(){
        view('form');
    }
    public function formPost(){
        var_dump($_GET);
        var_dump($_POST);
        
    }
};