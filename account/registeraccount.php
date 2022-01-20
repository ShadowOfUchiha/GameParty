<?php
include "../dbase/UserHandler.php";

if(isset($_REQUEST['firstname'])){
    $firstname = $_REQUEST['firstname'];
}else{

}
if(isset($_REQUEST['lastname'])){
    $lastname = $_REQUEST['lastname'];
}else{

}

if(isset($_REQUEST['email'])){
    $email = $_REQUEST['email'];
}else{

}
if(isset($_REQUEST['password'])){
    $password = $_REQUEST['password'];
    $password = trim($password);
}else{

}


if(isset($_REQUEST['passwordconfirm'])){
    $passwordcfrm = $_REQUEST['passwordconfirm'];
    $passwordcfrm = trim($passwordcfrm);     
}else{

}

if($password = $passwordcfrm){
    $checkedpw= $password;
    $pwhash= password_hash($checkedpw,PASSWORD_DEFAULT);
}else{
    exit("wachtwoorden komen niet overeen");
}

$user = new UserHandler;

$sql =  $sql = "INSERT INTO users (firstname, lastname, email, password) values(?,?,?,?)";

$user->addUser($sql, $firstname, $lastname, $email, $pwhash);

header("Location: ./login.php");