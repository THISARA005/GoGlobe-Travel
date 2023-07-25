<?php
require_once "db_connection.php";

if (isset($_GET['pack_id'])) {
    $packId = $_GET['pack_id'];

    // Prepare the DELETE query
    $deleteQuery = "DELETE FROM packages WHERE pack_ID = ?";
    $stmt = $conn->prepare($deleteQuery);
    $stmt->bind_param("i", $packId);

    // Execute the DELETE query
    if ($stmt->execute()) {
        // The record is successfully deleted from the database.
        // You can send a response message if needed.
        echo "Record deleted successfully!";
    } else {
        // Handle the error, if any.
        echo "Error deleting record: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
