<?php
// save_pack_data.php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Ensure that the pack_id_input is set and not empty
    if (isset($_POST["pack_id_input"]) && !empty($_POST["pack_id_input"])) {
        // Get the sanitized pack_id from the input
        $pack_id = $_POST["pack_id_input"];

        // Connect to your database (replace with your database connection details)
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "goglobetravel";

        // Create a new database connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check if the connection was successful
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Sanitize and validate other input fields
        $title = $_POST["title"]; // Add proper sanitization and validation for other fields as well
        $pack_description = $_POST["pack_description"];
        $programm = $_POST["programm"];
        $grpSize = $_POST["grpSize"];
        $duration_days = $_POST["duration_days"];
        $pack_category = $_POST["pack_category"];
        $regPrice = $_POST["regPrice"];
        $disPrice = $_POST["disPrice"];
        $location = $_POST["location"];
        $active_status = isset($_POST["active_status"]) ? 1 : 0; // Convert checkbox value to 1 or 0

        $sale_price = $regPrice - ($regPrice * $disPrice) * 0.01;
        $duration_nights= $duration_days - 1;

        if (isset($_FILES["thumb_image"]) && $_FILES["thumb_image"]["error"] === UPLOAD_ERR_OK) {
            $target_directory = "uploads/";
            $thumbnail_name = basename($_FILES["thumb_image"]["name"]);
            $thumbnail_path = $target_directory . $thumbnail_name;

            // Move the uploaded file to the target directory
            if (move_uploaded_file($_FILES["thumb_image"]["tmp_name"], $thumbnail_path)) {
                // Thumbnail image upload successful
            } else {
                echo "Error uploading thumbnail image.";
                exit;
            }
        } else {
            echo "Error uploading thumbnail image.";
            exit;
        }

        // Prepare the SQL statement to update the row in the database
        $sql = "UPDATE packages SET title=?, pack_description=?, program=?, grp_size=?, 
                duration_days=?, category=?, reg_price=?, discount=?, location=?, status=?,sale_price=?,duration_nights=?,thumb_image=?
                WHERE pack_id=?";

        // Prepare the statement
        $stmt = $conn->prepare($sql);

        // Bind the parameters and execute the statement
        $stmt->bind_param("sssiisddsidisi", $title, $pack_description, $programm, $grpSize, $duration_days,
                  $pack_category, $regPrice, $disPrice, $location, $active_status, $sale_price,
                  $duration_nights, $thumbnail_path ,$pack_id);
        
        // Execute the statement
        if ($stmt->execute()) {
            // Data updated successfully
            echo "Data updated successfully!";
        } else {
            // Handle the error
            echo "Error updating data: " . $stmt->error;
        }

        // Close the statement and connection
        $stmt->close();
        $conn->close();
    } else {
        // pack_id_input is missing or empty
        echo "Invalid pack ID!";
    }
} else {
    // Handle the case when the form is not submitted directly
    echo "Form submission error!";
}
?>
