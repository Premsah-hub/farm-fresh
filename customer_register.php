<?php

include("db.php");

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$sql = "INSERT INTO customers(name,email,phone)
VALUES('$name','$email','$phone')";

if(mysqli_query($conn,$sql)){
    echo "Data Inserted Successfully";
}
else{
    die("Insert Error: " . mysqli_error($conn));
}

?>