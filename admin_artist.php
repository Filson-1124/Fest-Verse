<?php
include 'db.php';

if (isset($_POST['add'])) {


    $name = htmlspecialchars($_POST['name']);
    $desc = htmlspecialchars($_POST['description']);
    $hits = htmlspecialchars($_POST['hit_songs']);


    $img = "uploads/" . $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], $img);

   
    $sql = "INSERT INTO artists (name, description, hit_songs, image_path)
            VALUES ('$name', '$desc', '$hits', '$img')";

    mysqli_query($conn, $sql);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Manage Artists</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-4 md:p-8">

<button onclick="window.location.href='index.php'"
        class="bg-blue-600 hover:bg-blue-700 text-white px-4 md:px-5 py-2 rounded-lg font-medium mb-4">
    Back
</button>

<h2 class="text-2xl md:text-3xl font-bold mb-6 text-gray-800">Manage Artists</h2>


<div class="w-full max-w-2xl mx-auto bg-white p-6 rounded-xl shadow mb-10">
    <h3 class="text-xl md:text-2xl font-semibold mb-4 text-gray-700">Add New Artist</h3>

    <form method="POST" enctype="multipart/form-data" class="space-y-4">
        <input type="text" name="name"
            class="w-full text-base md:text-lg px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300"
            placeholder="Artist Name" required>

        <textarea name="description"
            class="w-full text-base md:text-lg px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300"
            placeholder="Description" rows="3" required></textarea>

        <input type="text" name="hit_songs"
            class="w-full text-base md:text-lg px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300"
            placeholder="Hit Songs (comma separated)" required>

        <input type="file" name="image"
            class="w-full text-base md:text-lg border border-gray-300 rounded-lg p-2" required>

        <button type="submit" name="add"
            class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg font-medium w-full md:w-auto">
            Add Artist
        </button>
    </form>
</div>

<h3 class="text-xl md:text-2xl font-semibold mb-3 text-gray-800">Existing Artists</h3>


<div class="overflow-x-auto bg-white rounded-xl shadow">
<table class="w-full text-left text-sm md:text-base">
    <thead>
        <tr class="bg-blue-600 text-white">
            <th class="p-3">Image</th>
            <th class="p-3">Name</th>
            <th class="p-3">Hit Songs</th>
            <th class="p-3">Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $result = $conn->query("SELECT * FROM artists");
    while ($row = $result->fetch_assoc()):
    ?>
        <tr class="border-b hover:bg-gray-50">
            <td class="p-3">
                <img src="<?= htmlspecialchars($row['image_path']) ?>" class="w-14 h-14 md:w-16 md:h-16 object-cover rounded">
            </td>
            <td class="p-3"><?= htmlspecialchars($row['name']) ?></td>
            <td class="p-3"><?= htmlspecialchars($row['hit_songs']) ?></td>
            <td class="p-3">
                <a href="edit_artist.php?id=<?= $row['id'] ?>" class="text-blue-600 font-medium hover:underline block md:inline-block mb-1">
                    Edit
                </a>
                <a href="delete_artist.php?id=<?= $row['id'] ?>" class="text-red-600 font-medium hover:underline block md:inline-block"
                   onclick="return confirm('Are you sure you want to delete this artist?')">
                    Delete
                </a>
            </td>
        </tr>
    <?php endwhile; ?>
    </tbody>
</table>
</div>

</body>

</html>
