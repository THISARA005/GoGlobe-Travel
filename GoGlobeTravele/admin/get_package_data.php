<?php
// Assuming you have established a database connection ($mysqli)

// Database connection configuration
$host = 'localhost';     // MySQL server hostname
$username = 'root';  // MySQL username
$password = '';  // MySQL password
$database = 'goglobetravel';  // MySQL database name

// Create a new MySQLi object
$mysqli = new mysqli($host, $username, $password, $database);

// Check the connection
if ($mysqli->connect_errno) {
    echo json_encode(array('error' => 'Failed to connect to MySQL: ' . $mysqli->connect_error));
    exit();
}

// Check if the pack_id parameter is provided
if (isset($_GET['pack_id']) && is_numeric($_GET['pack_id'])) {
    $pack_id = $_GET['pack_id'];

    // Prepare and execute the SQL query
    $query = "SELECT * FROM packages WHERE pack_ID = ?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param('i', $pack_id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the package data is found
    if ($result->num_rows > 0) {
        $packageData = $result->fetch_assoc();
        echo json_encode($packageData);
    } else {
        echo json_encode(array('error' => 'Package data not found.'));
    }

    // Close the statement and database connection
    $stmt->close();
    $mysqli->close();
} else {
    echo json_encode(array('error' => 'Invalid or missing package ID.'));
}
?>
