<?php
// delete_package.php

if (isset($_GET['pack_id'])) {
    $packId = $_GET['pack_id'];

    // Database connection configuration (include db_connection.php)
    require_once "db_connection.php";

    // SQL query to delete the package record from the database
    $query = "DELETE FROM packages WHERE pack_ID = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $packId);

    if (mysqli_stmt_execute($stmt)) {
        // Deletion was successful
        echo 'success';
    } else {
        // Deletion failed
        echo 'error';
    }

    // Close the prepared statement and database connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    // Invalid or missing pack_id parameter
    echo 'errorrr';
}
?>
