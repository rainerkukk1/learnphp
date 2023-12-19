<?php

namespace App\Models;

class Post extends Model{
    static $table = 'posts';
    public $id;
    public $title;
    public $body;
}