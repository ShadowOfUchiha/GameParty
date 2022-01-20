<?php class Page{
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


    function getPage($id){
        $stmt = $this->handle->prepare($sql)->execute([$id]);
    }
    
} 