<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "eshop";

$connection = mysqli_connect($host,$user,$password,$database);

if(!$connection){
    echo "Connection failed: ";
}else {
    echo " connected successfully"
}

