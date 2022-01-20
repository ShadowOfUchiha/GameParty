<?php

Class userHandler{
    function __construct(){
        $this->dbasename= "multiversum";
        $this->password= "artyom";
        $this->username= "artyom";
        $this->servername= "localhost";
        try{
            $this->handle = new PDO("mysql:host=".$this->servername.";dbname=". $this->dbasename, $this->username,$this->password);
            $this->handle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    function addUser($sql, $firstname, $lastname, $email, $checkedpw){
        $stmt = $this->handle->prepare($sql)->execute([$firstname, $lastname, $email, $checkedpw]);
    }
    function readUsers($sql){
        $stmt = $this->handle->prepare($sql);
        
        $stmt->execute();

        $product = $stmt->fetchall(PDO::FETCH_ASSOC);
        return $product;
    }

    function editUser(){
        
    }
    //for login
    function readUser($sql, $arguments){
        $stmt = $this->handle->prepare($sql);
        $stmt->execute([$arguments]);
        $user = $stmt->fetch();
       
        return $user;
        
    }

    function deleteUser($sql){
        $stmt = $this->handle->prepare($sql)->execute();
    }

    function __destruct(){
        $this->handle = null;
    }
}




?>