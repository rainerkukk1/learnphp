<?php

namespace App\Models;

use App\DB;

class Model{
    static $table;
    public $id;

    public static function all(){
        $db = new DB();
        return $db-> all(static::$table, static::class);
    }
    public function save(){
        $db = new DB();

        if($this->id){
            $db-> update(static::$table, get_object_vars($this));
        }else{
            $db-> insert(static::$table, get_object_vars($this));
        }
    }
    public static function find($id){
        $db = new DB();
        return $db-> find(static::$table, static::class, $id);
    }
    public static function where($fieldName, $value){
        $db = new DB();
        return $db->where(static::$table, static::class, $fieldName, $value);
    }
    public function delete(){
        $db = new DB();
        return $db-> delete(static::$table, $this->id);
    }
}