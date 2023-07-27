<?php
// delete_package.php

include_once 'db_connection.php';

if (isset($_GET['pack_id'])) {
    $packId = $_GET['pack_id'];

    // Use prepared statements to prevent SQL injection
    $query = "DELETE FROM packages WHERE pack_id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "s", $packId);

    if (mysqli_stmt_execute($stmt)) {
        // Package deleted successfully
        $response = array('success' => true);
    } else {
        // Failed to delete the package
        $response = array('success' => false, 'message' => 'Failed to delete the package');
    }

    mysqli_stmt_close($stmt);
} else {
    // Invalid request, pack_id not provided
    $response = array('success' => false, 'message' => 'Invalid request');
}

header('Content-Type: application/json');
echo json_encode($response);
