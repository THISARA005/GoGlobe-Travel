<?php
// delete_booking.php

// Check if the request is a POST request
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Check if the booking_id parameter is provided
    if (isset($_POST["booking_id"])) {
        // Get the booking ID from the POST request
        $bookingId = $_POST["booking_id"];

        // Create a connection to your database
        include 'db_connection.php';

        // Prepare the DELETE query
        $query = "DELETE FROM pack_booking WHERE booking_ID = ?";

        // Prepare the statement
        $stmt = mysqli_prepare($conn, $query);

        // Bind the booking ID to the statement
        mysqli_stmt_bind_param($stmt, "i", $bookingId);

        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            // If the deletion is successful, return success response
            echo "success";
        } else {
            // If there was an error, return failure response
            echo "error";
        }

        // Close the statement and database connection
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    } else {
        // If booking_id parameter is not provided, return error response
        echo "error";
    }
} else {
    // If the request is not a POST request, return error response
    echo "error";
}
