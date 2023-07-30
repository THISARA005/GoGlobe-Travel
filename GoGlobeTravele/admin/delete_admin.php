<?php
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
  exit();
}

// Check if the user ID parameter exists and is valid
if (isset($_POST['userID']) ) {
  $userId = $_POST['userID'];

  // SQL query to delete the user record from the database
  $query = "DELETE FROM admin WHERE id = $userId";
  $result = mysqli_query($mysqli, $query);

  if ($result) {
    // Deletion was successful
    echo 'success';
  } else {
    // Deletion failed
    echo 'error';
  }
} else {
  // Invalid or missing user ID parameter
  echo 'errorrr';
}

// Remember to close the database connection
mysqli_close($mysqli);
?>
