<?php

Class productHandler{
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

    function addProduct($sql, $arguments){
        $stmt = $this->handle->prepare($sql)->execute($arguments);
       
    }
    function readProducts($sql){
        $stmt = $this->handle->prepare($sql);
        
        $stmt->execute();

        $products = $stmt->fetchall(PDO::FETCH_ASSOC);
        return $products;
    }

    function searchProducts($sql, $searchValue){
        $stmt = $this->handle->prepare($sql);
        
        $stmt->execute([$searchValue]);

        $products = $stmt->fetchall(PDO::FETCH_ASSOC);
        return $products;
    }

    function readProduct($sql, $id){
        
        $stmt = $this->handle->prepare($sql);;
        $stmt->execute([$id]);
        

        $product = $stmt->fetchall(PDO::FETCH_ASSOC);
        return $product;
    }
    function editProduct($sql, $arguments){
        $stmt = $this->handle->prepare($sql);
        $stmt->execute($arguments);
    }

    function deleteProduct($sql){
        $stmt = $this->handle->prepare($sql)->execute();
    }

    function __destruct(){
        $this->handle = null;
    }
}


?>