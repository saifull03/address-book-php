<?php
include 'db.php';
$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM contacts WHERE id=$id");
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Contact</title>

    <!-- tailwind css cdn link -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <!-- Card -->
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md">

        <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">
            ✏️ Edit Contact
        </h2>

        <form action="update.php" method="post" class="space-y-4">

            <!-- Hidden ID -->
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

            <!-- Name -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                <input type="text" name="name"
                       value="<?php echo $row['name']; ?>"
                       class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Phone -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                <input type="text" name="phone"
                       value="<?php echo $row['phone']; ?>"
                       class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Email -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                <input type="email" name="email"
                       value="<?php echo $row['email']; ?>"
                       class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Address -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Home Address</label>
                <textarea name="address" rows="3"
                          class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500"><?php echo $row['address']; ?></textarea>
            </div>

            <!-- Buttons -->
            <div class="flex justify-between items-center pt-4">
                <a href="index.php"
                   class="text-gray-600 hover:underline">
                   ← Back
                </a>

                <button type="submit"
                        class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">
                    Update
                </button>
            </div>

        </form>

    </div>

</body>
</html>
