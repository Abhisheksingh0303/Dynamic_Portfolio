<?php
include_once('../connection/db_connection.php');
if (isset($_GET['id'])) {
    $service_id = $_GET['id'];

    // Perform validation if needed

    // Delete the service from the database
    $query = "DELETE FROM services WHERE id = $service_id";
    $run = mysqli_query($db, $query);

    // Redirect back to the admin panel page or show a success message
    if ($run) {
        echo '<script>alert("Service deleted successfully!");</script>';
        echo "<script>window.location.href = 'index.php?servicessetting=true';</script>";
    } else {
        echo '<script>alert("Failed to delete service. Please try again.");</script>';
        echo "<script>window.location.href = 'index.php?servicessetting=true';</script>";
    }
} else {
    echo '<script>alert("Invalid service ID.");</script>';
    echo "<script>window.location.href = 'index.php?servicessetting=true';</script>";
}
?>
