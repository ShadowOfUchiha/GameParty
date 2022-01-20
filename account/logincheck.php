<?php 
require "../dbase/userHandler.php";

if(filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL)){
    if(isset($_REQUEST['email'])){
        $email = $_REQUEST['email'];
        $user = new userHandler;
        if(isset($_REQUEST['password'])){
            $password = $_REQUEST['password'];   
            $sql = "SELECT * FROM `users` WHERE `email`= ? ";
            $userData = $user->readUser($sql, $email);
            if (!empty($userData)) {
                
                if (password_verify($password, $userData['password'])) {
                    session_start();
                    session_regenerate_id();
                   
                    $_SESSION['loggedin'] = TRUE;
                    $_SESSION['firstname'] = $userData['firstname'];
                    $_SESSION['email'] = $email;
                    $_SESSION['id'] = $userData['id'];
                    echo 'Welcome ' . $_SESSION['firstname'] . '!';
                    if($userData['admin'] == 1){
                        $_SESSION['admin'] = TRUE;
                        header("location: ./index.php");
                    }else{
                        header("location: ./account.php");
                    }
                    
                } else {
                    // Incorrect password
                    echo 'Incorrect password!';
                }
            } else {
                // Incorrect email
                echo 'Incorrect email';
            }
        }
        
        
    }
}else{
    exit($_REQUEST['email']." is geen geldig adress");
}




//password check
//email check
