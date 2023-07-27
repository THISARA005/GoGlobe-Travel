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

// Query to retrieve data from the daily_revenue table
$query = "SELECT day, revenue FROM daily_revenue ORDER BY day";

// Execute the query
$result = $mysqli->query($query);

// Create an array to hold the data
$data = array();
$data[] = ['Day', 'Revenue'];

// Fetch the data from the result set and add it to the array
while ($row = $result->fetch_assoc()) {
    $data[] = [intval($row['day']), floatval($row['revenue'])];
}

// Close the database connection
$mysqli->close();

// Return the data in JSON format
echo json_encode($data);
