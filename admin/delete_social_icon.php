<?php
include_once('../connection/db_connection.php');
// Ensure the ID is provided via GET
if (isset($_GET['id'])) {
    $social_id = $_GET['id'];

    // Perform the deletion
    $delete_query = "DELETE FROM social_media WHERE id = $social_id";
    mysqli_query($db, $delete_query);

    // Redirect back to the admin panel or wherever you want to go
    header("Location: ../admin/index.php?contactsetting=true");
    exit;
} else {
    // If ID is not provided, redirect back to the admin panel or show an error message
    header("Location: ../admin/index.php?contactsetting=true");
    exit;
}
?>
