<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

    // Prepare and bind the form data
    $title = $_POST['title'];
    $pack_description = $_POST['pack_description'];
    $location = $_POST['location'];

    // File upload for pack_image
    $pack_image = "";
    if (isset($_FILES['pack_image']) && $_FILES['pack_image']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = "uploads/"; // Replace with the actual upload directory path
        $uploadFile = $uploadDir . basename($_FILES['pack_image']['name']);
        if (move_uploaded_file($_FILES['pack_image']['tmp_name'], $uploadFile)) {
            $pack_image = $uploadFile;
        } else {
            echo "Failed to upload pack_image.";
            exit();
        }
    } else {
        echo "Error uploading pack_image.";
        exit();
    }

    // SQL query to insert data into the destination table
    $query = "INSERT INTO destination (title, pack_description, location, pack_image) VALUES (?, ?, ?, ?)";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("ssss", $title, $pack_description, $location, $pack_image);

    // Execute the prepared statement
    if ($stmt->execute()) {
        echo '<script>alert("Destination added successfully!"); window.location.href = "dashboard.php";</script>';
        exit();
    } else {
        echo "Error in saving data.";
    }

    // Close the prepared statement and database connection
    $stmt->close();
    $mysqli->close();
}
?>
