<?php

namespace App;

use PDO;
use PDOException;

class DB {
    private $conn;

    public function __construct()
    {
        try {
            $this->conn = new PDO("sqlite:db.sqlite");
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        } catch(PDOException $e) {
            throw new \Exception("Connection failed: " . $e->getMessage());
        }
    }

    public function all(string $table, string $className){
        $stmt = $this->conn->prepare("SELECT * FROM $table");
        $stmt->execute();
      
        // set the resulting array to associative
        $stmt->setFetchMode(PDO::FETCH_CLASS, $className);
        return $stmt->fetchAll();
    }

    public function find(string $table, string $className, $id){
        $stmt = $this->conn->prepare("SELECT * FROM $table WHERE id=$id");
        $stmt->execute();
      
        // set the resulting array to associative
        $stmt->setFetchMode(PDO::FETCH_CLASS, $className);
        return $stmt->fetch();
    }
    public function where(string $table, string $className, $fieldName, $value){
        $stmt = $this->conn->prepare("SELECT * FROM $table WHERE $fieldName='$value'");
        $stmt->execute();

        // set the resulting array to associative
        $stmt->setFetchMode(PDO::FETCH_CLASS, $className);
        return $stmt->fetchAll();
    }

    public function insert($table, $fields){
        unset($fields['id']);
        $fieldNames = array_keys($fields);
        $fieldNamesText = implode(',', $fieldNames);
        $fieldValuesText = implode("','", $fields);
        $sql = "INSERT INTO $table ($fieldNamesText) 
                VALUES ('$fieldValuesText')";
        // use exec() because no results are returned
        $this->conn->exec($sql);
    }

    public function update($table, $fields){
        $id = $fields['id'];
        unset($fields['id']);
        $updateText = '';
        foreach($fields as $fieldName=>$fieldValue){
            $updateText .= "$fieldName='$fieldValue',";
        }
        $updateText = rtrim($updateText, ',');

        $sql = "UPDATE $table SET $updateText WHERE id=$id";

        // Prepare statement
        $stmt = $this->conn->prepare($sql);

        // execute the query
        $stmt->execute();
    }

    public function delete($table, $id){
        $sql = "DELETE FROM $table WHERE id=$id";

        // use exec() because no results are returned
        $this->conn->exec($sql);
    }
}