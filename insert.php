<?php
include 'db.php';

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];

// Checks if there is any same numbers or mail in the db
$check = "SELECT * FROM contacts WHERE phone='$phone' OR email='$email'";
$result = mysqli_query($conn, $check);

if (mysqli_num_rows($result) > 0) {
    echo "<script>
        alert('Phone number or Email already exists!');
        window.location.href='add.php';
    </script>";
    exit();
}

// Inserts  the data if  the mail and phone in the are unique
$sql = "INSERT INTO contacts (name, phone, email, address)
        VALUES ('$name', '$phone', '$email', '$address')";

mysqli_query($conn, $sql);

header("Location: index.php");
