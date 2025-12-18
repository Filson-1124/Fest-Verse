<?php
include 'db.php';

if (isset($_GET['id'])) {

    $id = intval($_GET['id']);

  
    $result = mysqli_query($conn, "SELECT image_path FROM artists WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        $imagePath = $row['image_path'];

     
        if (!empty($imagePath) && file_exists($imagePath)) {
            unlink($imagePath);
        }

        mysqli_query($conn, "DELETE FROM artists WHERE id = $id");

        header("Location: admin_artist.php");
        exit;
    } else {
        echo "Artist not found.";
    }

} else {
    echo "Missing ID.";
}
?>
