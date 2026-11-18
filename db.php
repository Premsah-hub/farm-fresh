<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "root",
    "farmfresh"
);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

?>