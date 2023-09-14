<?php
// Assuming you have a separate file for database connection with $db variable defined
include_once('../connection/db_connection.php');

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $counterId = $_GET['id'];

    // Prepare the DELETE query
    $query = "DELETE FROM counter WHERE id = $counterId";

    $run = mysqli_query($db, $query);

    if ($run) {
        echo '<script>alert("Project counter deleted successfully!");</script>';
        echo "<script>window.location.href = 'index.php?aboutsetting=true';</script>";
    } else {
        echo '<script>alert("Failed to delete project counter. Please try again.");</script>';
        echo "<script>window.location.href = 'index.php?aboutsetting=true';</script>";
    }
} else {
    echo '<script>alert("Invalid project counter ID.");</script>';
    echo "<script>window.location.href = 'index.php?aboutsetting=true';</script>";
}
?>
