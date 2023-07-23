<?php
// add_to_wishlist.php

// Assuming you have established a database connection ($mysqli)

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the package ID from the AJAX request
    $pack_id = $_POST['pack_id'];

    // Perform the insert query
    $query = "INSERT INTO wishlist (pack_id) VALUES ('$pack_id')";
    $result = mysqli_query($mysqli, $query);

    if ($result) {
        // The insert was successful
        http_response_code(200); // Send a success response
    } else {
        // The insert failed
        http_response_code(500); // Send an error response
    }
}

// Remember to close the database connection
mysqli_close($mysqli);
?>
