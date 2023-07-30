<?php
require_once "db_connection.php";

// Query to get the booking count
$query = "SELECT COUNT(*) AS booking_count FROM pack_booking";

$result = mysqli_query($conn, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $bookingCount = $row['booking_count'];

    // Send the booking count as JSON response
    echo json_encode(['booking_count' => $bookingCount]);
} else {
    // Error occurred while fetching data
    echo json_encode(['error' => 'Error occurred while fetching booking count']);
}
?>
