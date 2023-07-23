<?php
// Connect to the database
$conn = new mysqli("localhost", "root", "", "goglobetravel");

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the user's login status based on their user_ID
$userId = $_SESSION['user_ID']; // Assuming you have stored the user_ID in the session
$query = "SELECT * FROM users WHERE user_ID = '$userId'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // User is logged in
    echo "loggedIn";
} else {
    // User is not logged in
    echo "notLoggedIn";
}

// Close the database connection
$conn->close();
?>
