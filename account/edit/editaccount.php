<?php

include "../../dbase/UserHandler.php";

if(isset($_REQUEST['firstname'])){
    $newfirstname = $_REQUEST['firstname'];
}

if(isset($_REQUEST['lastname'])){
    $newlastname = $_REQUEST['lastname'];
}
?>