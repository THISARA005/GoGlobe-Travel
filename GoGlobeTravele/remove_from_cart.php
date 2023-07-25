<?php
// remove_from_cart.php

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
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    // You can handle the connection error gracefully based on your requirements
    exit();
}

// Check if the pack_id is provided in the request
if (isset($_GET["pack_id"])) {
    $pack_id = $_GET["pack_id"];
   

    // Prepare the delete query
    $delete_query = "DELETE FROM cart WHERE package_ID = ?";
    $stmt = $mysqli->prepare($delete_query);
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
}

// Remember to close the database connection
$mysqli->close();
?>
