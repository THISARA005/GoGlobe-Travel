<?php

require_once "db_connection.php";
// Get the pack_id from the URL parameters
if (isset($_GET['id'])) {
    $packId = $_GET['id'];

    $query = "DELETE FROM packages WHERE pack_ID = $packId";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

    // Perform the delete operation using the $packId
    // For example, you can use a DELETE query:
    // $sql = "DELETE FROM your_table_name WHERE pack_id = $packId";
    // Execute the query to delete the record from the database
}
?>
