<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Get image path
    $stmt = $conn->prepare("SELECT image_path FROM artists WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        $imagePath = $row['image_path'];

        // Delete image if it exists
        if (!empty($imagePath) && file_exists($imagePath)) {
            unlink($imagePath);
        }

        // Delete the artist record
        $delete = $conn->prepare("DELETE FROM artists WHERE id = ?");
        $delete->bind_param("i", $id);
        $delete->execute();

        header("Location: admin_artist.php");
        exit;
    } else {
        echo "Artist not found.";
    }
} else {
    echo "Missing ID.";
}
?>
