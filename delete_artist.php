<?php
include 'db_conn.php'; // your database connection

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // 1. Get the image file linked to this artist
    $query = $conn->prepare("SELECT image FROM artists WHERE id = ?");
    $query->bind_param("i", $id);
    $query->execute();
    $result = $query->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $imagePath = __DIR__ . "/uploads/" . $row['image'];

        // 2. Delete the file from the folder
        if (file_exists($imagePath)) {
            unlink($imagePath); // delete image
        }

        // 3. Delete the database record
        $delete = $conn->prepare("DELETE FROM artists WHERE id = ?");
        $delete->bind_param("i", $id);

        if ($delete->execute()) {
            echo "Artist deleted successfully.";
        } else {
            echo "Failed to delete artist.";
        }
    } else {
        echo "Artist not found.";
    }
} else {
    echo "Missing ID.";
}
?>
