<?php
// Include the database connection file
require_once 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $title = $_POST['title'];
    $pack_description = $_POST['pack_description'];
    $grpSize = $_POST['grpSize'];
    $duration_days = $_POST['duration_days'];
    $duration_nights = $_POST['duration_nights'];
    $pack_category = $_POST['pack_category'];
    $sale_price = $_POST['sale_price'];
    $reg_price = $_POST['reg_price'];
    $discount = $_POST['discount'];
    $populer = isset($_POST['populer']) ? 1 : 0;
    $keyword = $_POST['keyword'];
    $rating = $_POST['rating'];

    // File upload handling
    $pack_image = $_FILES['pack_image']['name'];
    $pack_image_tmp = $_FILES['pack_image']['tmp_name'];

    // Move uploaded file to desired directory
    move_uploaded_file($pack_image_tmp, 'uploads/' . $pack_image);

    // Insert data into database
    $sql = "INSERT INTO packages (title, pack_description, grp_size, duration_days, duration_nights, category, sale_price, reg_price, discount, populer, keywords, thumb_image,ratings) 
            VALUES ('$title', '$pack_description', $grpSize, $duration_days, $duration_nights, '$pack_category', $sale_price, $reg_price, $discount, $populer, '$keyword', '$pack_image','$rating')";
    
    if (mysqli_query($conn, $sql)) {
        echo "Data stored successfully in the 'packages' table.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>
