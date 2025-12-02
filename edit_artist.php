<?php
include 'db.php';

$id = $_GET['id'];
$artist = $conn->query("SELECT * FROM artists WHERE id=$id")->fetch_assoc();

// Handle Update
if (isset($_POST['update'])) {

    $name = $_POST['name'];
    $desc = $_POST['description'];
    $hits = $_POST['hit_songs'];

    if (!empty($_FILES["image"]["name"])) {
        $img = "uploads/" . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $img);
        $updateImg = ", image_path='$img'";
    } else {
        $updateImg = "";
    }

    $conn->query("UPDATE artists SET
                  name='$name', description='$desc', hit_songs='$hits'
                  $updateImg WHERE id=$id");

    header("Location: admin_artist.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Edit Artist</title>

<!-- ⭐ Tailwind CDN -->
<script src="https://cdn.tailwindcss.com"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="bg-gray-100 p-10">

<div class="max-w-xl mx-auto bg-white p-8 rounded-xl shadow">
    
    <h2 class="text-3xl font-bold mb-6 text-gray-800">Edit Artist</h2>

    <form method="POST" enctype="multipart/form-data" class="space-y-4">

        <div>
            <label class="font-medium text-gray-700">Artist Name</label>
            <input type="text" name="name"
                value="<?= $artist['name'] ?>"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300"
                required>
        </div>

        <div>
            <label class="font-medium text-gray-700">Description</label>
            <textarea name="description" rows="3"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300"
                required><?= $artist['description'] ?></textarea>
        </div>

        <div>
            <label class="font-medium text-gray-700">Hit Songs</label>
            <input type="text" name="hit_songs"
                value="<?= $artist['hit_songs'] ?>"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300"
                required>
        </div>

        <div>
            <label class="font-medium text-gray-700">Replace Image (optional)</label>
            <input type="file" name="image"
                class="w-full border border-gray-300 rounded-lg p-2">
        </div>

        <div class="mt-4">
            <button name="update"
                class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg font-medium">
                Update Artist
            </button>

            <a href="admin_artist.php"
               class="ml-3 text-gray-600 hover:text-gray-800 font-medium">
                Cancel
            </a>
        </div>
    </form>

</div>

</body>
</html>
