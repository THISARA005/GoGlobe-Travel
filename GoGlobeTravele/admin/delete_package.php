<?php
require_once "db_connection.php";

if (isset($_POST["pack_id"])) {
    $pack_id = $_POST["pack_id"];
    

    // Prepare the delete query
    $delete_query = "DELETE FROM packages WHERE pack_ID = ?";
    $stmt = $conn->prepare($delete_query);
    $stmt->bind_param("i", $pack_id);

    // Execute the delete query
    if ($stmt->execute()) {
        // Deletion successful
        echo "success";
    } else {
        // Deletion failed
        echo "error";
    }
    $stmt->close();
    $conn->close();
}
?>
