<?php

include "db.php";

$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$bank = $_POST['bank_code'];

$sql = "INSERT INTO users (name,email,password,bank_code)
VALUES ('$name','$email','$password','$bank')";

if($conn->query($sql) === TRUE){
    echo "Account created successfully";
}
else{
    echo "Error: " . $conn->error;
}

?>