<?php
// Include the database connection file
require_once 'db_connection.php';

if (isset($_GET['pack_id'])) {
    $packId = $_GET['pack_id'];

    // Create a connection to the database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the query to fetch data based on pack_id
    $sql = "SELECT * FROM packages WHERE pack_ID = '$packId'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch the data and send it back as JSON
        $row = $result->fetch_assoc();
        $data = array(
            'success' => true,
            'package' => $row
        );
        echo json_encode($data);
    } else {
        // Package with the given pack_id not found
        $data = array(
            'success' => false,
            'message' => 'Package not found.'
        );
        echo json_encode($data);
    }

    // Close the database connection
    $conn->close();
} else {
    // Invalid request, pack_id not provided
    $data = array(
        'success' => false,
        'message' => 'Invalid request.'
    );
    echo json_encode($data);
}
?>
