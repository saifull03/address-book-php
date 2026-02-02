<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Address Book</title>

    <!-- Tailwind css CDN  link -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<!-- view  -->
<body class="bg-gray-100 min-h-screen p-6">

    <!-- Main box of the view table -->
    <div class="max-w-6xl mx-auto bg-white shadow-lg rounded-lg p-6">

        <!-- Header  of the view table -->
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Address Book</h2>
            <a href="add.php"
               class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 ">
                 Add New Contact
            </a>
        </div>

        <!--   table  header of the view table-->
        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-200 text-sm text-left">
                <thead class="bg-gray-200 text-gray-700 uppercase">
                    <tr>
                        <th class="px-4 py-3 border">ID</th>
                        <th class="px-4 py-3 border">Full Name</th>
                        <th class="px-4 py-3 border">Phone Number</th>
                        <th class="px-4 py-3 border">Email Address</th>
                        <th class="px-4 py-3 border">Home Address</th>
                        <th class="px-4 py-3 border text-center">Actions</th>
                    </tr>
                    
                </thead>
                <tbody class="bg-white">

<!-- db connection with the table -->

                    <?php
                    $result = mysqli_query($conn, "SELECT * FROM contacts");
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "
                    
                        <tr class='hover:bg-gray-100'>
                            <td class='px-4 py-2 border'>{$row['id']}</td>
                            <td class='px-4 py-2 border'>{$row['name']}</td>
                            <td class='px-4 py-2 border'>{$row['phone']}</td>
                            <td class='px-4 py-2 border'>{$row['email']}</td>
                            <td class='px-4 py-2 border'>{$row['address']}</td>
                            <td class='px-4 py-2 border text-center'>
                                <a href='edit.php?id={$row['id']}'
                                   class='text-blue-600 hover:underline mr-2'>
                                   Edit
                                </a>
                                |
                                <a href='delete.php?id={$row['id']}'
                                   onclick='return confirm(\"Are you sure?\")'
                                   class='text-red-600 hover:underline ml-2'>
                                   Delete
                                </a>
                            </td>
                        </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
