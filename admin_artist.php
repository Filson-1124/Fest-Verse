<?php
include 'db.php';

// Handle Add Artist
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $desc = $_POST['description'];
    $hits = $_POST['hit_songs'];

    $img_name = basename($_FILES["image"]["name"]);
    $img = "uploads/" . $img_name;
    move_uploaded_file($_FILES["image"]["tmp_name"], $img);

    $stmt = $conn->prepare("INSERT INTO artists (name, description, hit_songs, image_path) VALUES (?, ?, ?, ?)");
    
    $stmt->bind_param("ssss", $name, $desc, $hits, $img);

    $stmt->execute();
    
    $stmt->close();
    header("Location: admin_artist.php");
}

// Handle Delete
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM artists WHERE id=$id");
}
?>

<h2>Manage Artists</h2>

<form method="POST" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="Artist Name" required><br>
    <textarea name="description" placeholder="Description" required></textarea><br>
    <input type="text" name="hit_songs" placeholder="Hit Songs" required><br>
    <input type="file" name="image" required><br><br>
    <button type="submit" name="add">Add Artist</button>
</form>

<hr>

<h3>Existing Artists</h3>

<table border="1" width="100%">
    <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Hit Songs</th>
        <th>Actions</th>
    </tr>

<?php
$result = $conn->query("SELECT * FROM artists");
while ($row = $result->fetch_assoc()):
?>
    <tr>
        <td><img src="<?= $row['image_path'] ?>" width="80"></td>
        <td><?= $row['name'] ?></td>
        <td><?= $row['hit_songs'] ?></td>
        <td>
            <a href="edit_artist.php?id=<?= $row['id'] ?>">Edit</a> |
            <a href="admin_artist.php?delete=<?= $row['id'] ?>" onclick="return confirm('Delete this artist?')">Delete</a>
        </td>
    </tr>
<?php endwhile; ?>

</table>
