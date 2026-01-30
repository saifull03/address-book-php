<!DOCTYPE html>
<html>

<head>
    <title>Add Contact</title>
</head>

<body>

    <h2>Add Contact</h2>

    <form action="insert.php" method="post">
        Name: <input type="text" name="name" required><br><br>
        Phone: <input type="text" name="phone" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        Address: <textarea name="address" required></textarea><br><br>
        <button type="submit">Save</button>
    </form>

</body>

</html>