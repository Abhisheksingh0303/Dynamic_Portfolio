<?php
// Assuming you have a separate file for database connection with $db variable defined
include_once('../connection/db_connection.php');

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $infoId = $_GET['id'];

    // Prepare the DELETE query
    $query = "DELETE FROM personal_info WHERE id = $infoId";

    $run = mysqli_query($db, $query);

    if ($run) {
        echo '<script>alert("Personal info deleted successfully!");</script>';
        echo "<script>window.location.href = 'index.php?aboutsetting=true';</script>";
    } else {
        echo '<script>alert("Failed to delete personal info. Please try again.");</script>';
        echo "<script>window.location.href = 'index.php?aboutsetting=true';</script>";
    }
} else {
    echo '<script>alert("Invalid personal info ID.");</script>';
    echo "<script>window.location.href = 'index.php?aboutsetting=true';</script>";
}
?>
