<?php
require_once "db_connection.php";

// Query to get the total earning
$query = "SELECT SUM(to_pay_amount) AS total_earning FROM pack_booking";

$result = mysqli_query($conn, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $totalEarning = $row['total_earning'];

    // Send the total earning as JSON response
    echo json_encode(['total_earning' => $totalEarning]);
} else {
    // Error occurred while fetching data
    echo json_encode(['error' => 'Error occurred while fetching total earning']);
}
?>
