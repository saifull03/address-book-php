<?php
include 'db.php';
$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM contacts WHERE id=$id");
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Contact</title>
</head>

<body>

    <h2>Edit Contact</h2>

    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>
        Phone: <input type="text" name="phone" value="<?php echo $row['phone']; ?>"><br><br>
        Email: <input type="email" name="email" value="<?php echo $row['email']; ?>"><br><br>
        Address: <textarea name="address"><?php echo $row['address']; ?></textarea><br><br>
        <button type="submit">Update</button>
    </form>

</body>

</html>