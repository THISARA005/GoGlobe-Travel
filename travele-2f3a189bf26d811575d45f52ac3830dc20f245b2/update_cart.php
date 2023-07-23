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
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    // You can handle the connection error gracefully based on your requirements
    exit();
}



$packId = $_GET['pack_id'];
$userId = $_GET['user_id'];

// Check if pack_id and user_id are present
if ($packId && $userId) {
  // Write the insert query
  $query = "INSERT INTO cart  VALUES ($userId, $packId)";


  // Execute the query
  if (mysqli_query($mysqli, $query)) {
    // Insertion successful
    echo "<script>
   
    window.location.href = 'tour-cart.php?user_id=' + $userId + '&pack_id=' + $packId;
</script>";// Set the response status code to 200 (OK)
  } else {
    // Error occurred while inserting the cart details
    echo "hiiii2"; // Set the response status code to 500 (Internal Server Error)
  }
} else {
  // Invalid pack_id or user_id
  echo "hiiii1"; // Set the response status code to 400 (Bad Request)
}
?>
