<?php
include 'db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];

$sql = "UPDATE contacts SET
        name='$name',
        phone='$phone',
        email='$email',
        address='$address'
        WHERE id=$id";

mysqli_query($conn, $sql);

header("Location: index.php");
