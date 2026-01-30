<?php
include 'db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];

// Check duplicates excluding current ID
$check = "SELECT * FROM contacts 
          WHERE (phone='$phone' OR email='$email') AND id != $id";
$result = mysqli_query($conn, $check);

if (mysqli_num_rows($result) > 0) {
    echo "<script>
        alert('Phone number or Email already exists!');
        window.location.href='edit.php?id=$id';
    </script>";
    exit();
}

$sql = "UPDATE contacts SET
        name='$name',
        phone='$phone',
        email='$email',
        address='$address'
        WHERE id=$id";

mysqli_query($conn, $sql);

header("Location: index.php");
