<?php
include 'db.php';

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];

$sql = "INSERT INTO contacts (name, phone, email, address)
        VALUES ('$name', '$phone', '$email', '$address')";

mysqli_query($conn, $sql);

header("Location: index.php");
