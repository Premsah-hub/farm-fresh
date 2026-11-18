<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["farmerName"];
    $email = $_POST["farmerEmail"];
    $phone = $_POST["farmerPhone"];

    $sql = "INSERT INTO farmers (name, email, phone)
            VALUES ('$name', '$email', '$phone')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php?msg=farmer_success");
        exit();
    } else {
        header("Location: index.php?msg=error");
        exit();
    }
}
?>