<?php
// Include the database connection file
require_once 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $title = $_POST['title'];
    $pack_description = $_POST['pack_description'];
    $grpSize = $_POST['grpSize'];
    $duration_days = $_POST['duration_days'];
    //$duration_nights = $_POST['duration_nights'];
    $pack_category = $_POST['pack_category'];
    $programm= $_POST['programm'];

    $reg_price = $_POST['regPrice'];
    $discount = $_POST['disPrice'];

    // Calculate the sales price
    $sale_price = $reg_price - ($reg_price * $discount) * 0.01;
    $duration_nights= $duration_days - 1;

    $populer = isset($_POST['populer']) ? 1 : 0;
    //$keyword = $_POST['keyword'];
    $rating = $_POST['rating'];
    $location = $_POST['location'];

    // File upload handling
    $pack_image = $_FILES['pack_image']['name'];
    $pack_image_tmp = $_FILES['pack_image']['tmp_name'];

    // Move uploaded file to desired directory
    move_uploaded_file($pack_image_tmp, 'uploads/' . $pack_image);

    // Prepare the insert query with prepared statements
    $stmt = $conn->prepare("INSERT INTO packages (title, pack_description, grp_size, duration_days, duration_nights, category, sale_price, reg_price, discount, populer, thumb_image, ratings, location,program) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,  ?, ?,?)");

    

    // Bind the parameters to the prepared statement
    $stmt->bind_param(
        "ssiiisdddissss",
        $title,
        $pack_description,
        $grpSize,
        $duration_days,
        $duration_nights,
        $pack_category,
        $sale_price,
        $reg_price,
        $discount,
        $populer,
     
        $pack_image,
        $rating,
        $location,
        $programm
    );

    // Execute the prepared statement
    if ($stmt->execute()) {
        echo "<script>  window.location.href = 'dashboard.php'; </script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
}

// Close the database connection
mysqli_close($conn);
?>
