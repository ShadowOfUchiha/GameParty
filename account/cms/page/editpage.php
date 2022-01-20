<?php
require "../../../dbase/productHandler.php";

$product = new productHandler;

if(isset($_REQUEST['pagename'])){
    $productName = $_REQUEST['pagename'];
}

if(isset($_REQUEST['pagetext'])){
    $pagetext = $_REQUEST['pagetext'];
}




$sql = "UPDATE pages SET pagename=?, pagetext=?";

$product->addProduct($sql,[$productName,$pagetext]);

?>