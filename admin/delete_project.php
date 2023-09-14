<?php
// Include the database connection file
include_once "../connection/db_connection.php";

// Check if the 'id' parameter is set in the URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $project_id = $_GET['id'];

    // Query to delete the project with the given id
    $delete_query = "DELETE FROM portfolio WHERE id = $project_id";

    // Perform the deletion
    $result = mysqli_query($db, $delete_query);

    if ($result) {
        // Project deleted successfully
        echo '<script>alert("Project deleted successfully.");</script>';
    } else {
        // Error occurred during deletion
        echo '<script>alert("Failed to delete the project. Please try again.");</script>';
    }
} else {
    // 'id' parameter not set or empty in the URL
    echo '<script>alert("Invalid request. Project ID not provided.");</script>';
}

// Redirect back to the projects list page after deletion
echo '<script>window.location.href = "../admin/index.php?projectssetting=true";</script>';
