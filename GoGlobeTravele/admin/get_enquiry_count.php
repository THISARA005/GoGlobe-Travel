<?php
require_once "db_connection.php";

// Query to get the enquiry count
$query = "SELECT COUNT(*) AS enquiry_count FROM enquiries";

$result = mysqli_query($conn, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $enquiryCount = $row['enquiry_count'];

    // Send the enquiry count as JSON response
    echo json_encode(['enquiry_count' => $enquiryCount]);
} else {
    // Error occurred while fetching data
    echo json_encode(['error' => 'Error occurred while fetching enquiry count']);
}
?>
