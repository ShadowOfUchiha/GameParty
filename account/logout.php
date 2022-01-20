<?php
session_start();
if($_SESSION['loggedin'] == true){
    session_unset();
    session_destroy();
    header("location: ./index.php");
}else{
    session_destroy();
    header("location: ./index.php");
}