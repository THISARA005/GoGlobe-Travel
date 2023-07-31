<?php
// add-blog.php

// Include your database connection file (db_connection.php)
require_once 'db_connection.php';

$userId = $_GET['user_id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get data from the form
    $title = $_POST['title'];
    $description = $_POST['description'];
    $Quate = $_POST['Quate'];
    $About = $_POST['About'];
    $location = $_POST['location'];
    $category = $_POST['category'];

    // Handle thumbnail image upload
    $thumb_image = '';
    if (!empty($_FILES['thumb_image']['name'])) {
        $image_upload_dir = "uploads1/"; // Update this with your upload directory path
        $thumb_image = basename($_FILES['thumb_image']['name']);
        $thumb_image_tmp = $_FILES['thumb_image']['tmp_name'];
        $thumb_image_path = $image_upload_dir . $thumb_image;

        if (move_uploaded_file($thumb_image_tmp, $thumb_image_path)) {
            // Image uploaded successfully, continue with the blog insertion
            // You may want to perform additional validation and checks on the uploaded image here
            header("blog-archive.php?user_id=$userId");
        exit;
        } else {
            // Handle image upload failure if necessary
            echo "Failed to upload thumbnail image.";
            exit;
        }
    }

    // Handle multiple image uploads
    $gallery = '';
    if (!empty($_FILES['gallery']['name'][0])) {
        $image_upload_dir = "uploads1/"; // Update this with your upload directory path
        $img_names = $_FILES['gallery']['name'];
        $img_tmps = $_FILES['gallery']['tmp_name'];

        // Loop through each uploaded image and save it to the server
        for ($i = 0; $i < count($img_names); $i++) {
            $img_name = basename($img_names[$i]);
            $img_tmp = $img_tmps[$i];
            $img_path = $image_upload_dir . $img_name;

            if (move_uploaded_file($img_tmp, $img_path)) {
                // Append the image filename to the gallery string for database insertion
                header("blog-archive.php?user_id=$userId");
        exit;
                $gallery .= $img_name . ",";
            }
        }

        // Remove the trailing comma from the gallery string
        $gallery = rtrim($gallery, ",");
    }

    $Posteddate = date("Y-m-d");

    // Insert blog data into the user_blog table
    $insert_blog_sql = "INSERT INTO `user_blog` (`title`, `description`, `blog_quote`, `personal_about`, `location`, `gallery`, `thumb_image`, `category`, `user_id`) VALUES ('$title', '$description', '$Quate', '$About', '$location', '$gallery', '$thumb_image', '$category', '$userId')";

    // Execute the query
    if ($conn->query($insert_blog_sql) === TRUE) {
        // Blog data inserted successfully
        // Redirect to a success page or any other page you prefer
        header("blog-archive.php?user_id=$userId");
        exit;
    } else {
        // Handle database insertion error if necessary
        echo "Error: " . $insert_blog_sql . "<br>" . $conn->error;
    }
}

// Remember to close the database connection
mysqli_close($conn);
?>
