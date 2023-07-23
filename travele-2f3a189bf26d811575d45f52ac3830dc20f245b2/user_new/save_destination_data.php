<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $destinationName = $_POST['destination_name'];
    $description = $_POST['description'];
    $location = $_POST['location'];
    $category = $_POST['category'];
    $rating = $_POST['rating'];

    // Process and validate the form data

    // File upload handling
    $uploadDirectory = "uploads/"; // Specify the directory where the image file should be stored
    $fileName = basename($_FILES["main_img"]["name"]);
    $targetFilePath = $uploadDirectory . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    // Check if the file is an actual image
    $check = getimagesize($_FILES["main_img"]["tmp_name"]);
    if ($check !== false) {
        // Check the file size (you can set a limit if desired)
        if ($_FILES["main_img"]["size"] > 500000) {
            echo "File is too large.";
        } else {
            // Allow only specific file formats (you can modify this as per your requirement)
            $allowedFileTypes = array("jpg", "jpeg", "png");
            if (in_array($fileType, $allowedFileTypes)) {
                // Connect to the database (replace "dbconnection.php" with your actual database connection file)
                include 'db_connection.php';

                // Prepare the SQL statement
                $stmt = $conn->prepare("INSERT INTO destinations (destination_name, description, location, category, rating, main_img) VALUES (?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("ssssds", $destinationName, $description, $location, $category, $rating, $targetFilePath);

                // Move the uploaded file to the destination directory
                if (move_uploaded_file($_FILES["main_img"]["tmp_name"], $targetFilePath)) {
                    // Execute the SQL statement
                    if ($stmt->execute()) {
                        // Destination data saved successfully
                        echo "<script>alert('Destination data saved successfully');</script>";
    echo "<script>window.location.href = 'dashboard.html';</script>";

                    } else {
                        // Error in saving destination data
                        echo "Error in saving destination data: " . $stmt->error;
                    }
                } else {
                    // Failed to move the uploaded file
                    echo "Error in uploading the file.";
                }

                // Close the database connection
                $stmt->close();
                $conn->close();
            } else {
                // Invalid file format
                echo "Invalid file format.";
            }
        }
    } else {
        // Invalid image file
        echo "Invalid image file.";
    }
} else {
    // Redirect to the form page if the form is not submitted
    header("Location: destination_form.php");
    exit;
}
?>
