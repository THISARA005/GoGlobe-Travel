<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "goglobetravel";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$title = $_POST['title'];
$description = $_POST['description'];
// Retrieve and sanitize other input fields

// Insert data intothe database
$sql = "INSERT INTO packages (title, description) VALUES ('$title', '$description')";
if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
