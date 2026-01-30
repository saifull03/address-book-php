<?php
$conn = mysqli_connect("localhost", "root", "", "address_book");

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
