<?php
require "../../../dbase/productHandler.php";

$product = new productHandler;

if(isset($_REQUEST['product_name'])){
    $productName = $_REQUEST['product_name'];
}

if(isset($_REQUEST['price'])){
    $productPrice = $_REQUEST['price'];
    $productPrice = str_replace(',', '.', $productPrice);
    $productPrice = filter_var($productPrice, FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION);
    $productPrice=  trim($productPrice);
    $productPrice = str_replace('-', '00', $productPrice);
}
if(isset($_REQUEST['ean_code'])){
    $productEAN= $_REQUEST['ean_code'];
}

if(isset($_REQUEST['photo'])){
    $productPhoto = $_REQUEST['photo'];
   

}

if(isset($_REQUEST['brand'])){
    $productBrand = $_REQUEST['brand'];
}

if(isset($_REQUEST['short_desc'])){
    $short_desc = $_REQUEST['short_desc'];
}

if(isset($_REQUEST['description'])){
    $productDesc = $_REQUEST['description'];
}

if(isset($_REQUEST['resolution'])){
    $productRes = $_REQUEST['resolution'];
}

if(isset($_REQUEST['color'])){
    $productColor = $_REQUEST['color'];
}

if(isset($_REQUEST['platform'])){
    $productPlatform = $_REQUEST['platform'];
}


$sql = "INSERT INTO `products`(`product_name`, `ean_code`, `photo`, `price`, `brand`, `description`, `short_desc`, `resolution`, `color`, `platform`) VALUES (?,?,?,?,?,?,?,?,?,?)";

$product->addProduct($sql,[$productName,$productEAN,$productPhoto,$productPrice,$productBrand,$productDesc,$short_desc,$productRes,$productColor,$productPlatform]);

?>