<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <title>Address Book</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h2>Address Book</h2>
    <a href="add.php">Add New Contact</a>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Address</th>
            <th>Actions</th>
        </tr>

        <?php
        $result = mysqli_query($conn, "SELECT * FROM contacts");
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['phone']}</td>
            <td>{$row['email']}</td>
            <td>{$row['address']}</td>
            <td>
                <a href='edit.php?id={$row['id']}'>Edit</a> |
                <a href='delete.php?id={$row['id']}' onclick='return confirm(\"Are you sure?\")'>Delete</a>
            </td>
        </tr>";
        }
        ?>
    </table>

</body>

</html>