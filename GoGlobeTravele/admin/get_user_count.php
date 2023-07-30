<?php
require_once "db_connection.php";

// Query to get the user count
$query = "SELECT COUNT(*) AS user_count FROM users";

$result = mysqli_query($conn, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $userCount = $row['user_count'];

    // Send the user count as JSON response
    echo json_encode(['user_count' => $userCount]);
} else {
    // Error occurred while fetching data
    echo json_encode(['error' => 'Error occurred while fetching user count']);
}
?>
