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
}
?>

<form method="POST" enctype="multipart/form-data">
    <input type="text" name="name" value="<?= $artist['name'] ?>" required><br>
    <textarea name="description" required><?= $artist['description'] ?></textarea><br>
    <input type="text" name="hit_songs" value="<?= $artist['hit_songs'] ?>" required><br>
    <input type="file" name="image"><br><br>

    <button name="update">Update</button>
</form>
