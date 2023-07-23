<?php
// Include the database connection file
require_once 'db_connection.php';

$userId = $_GET['user_id'];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $title = $_POST['title'];
    $description = $_POST['description'];
    $Quate = $_POST['Quate'];
    $About = $_POST['About'];
    $location = $_POST['location'];
    $gallery = $_POST['gallery'];
    $thumb_image = $_POST['thumb_image'];
    $category = $_POST['category'];

    $Posteddate = date("Y-m-d");

    $sql = "INSERT INTO `user_blog` (`title`, `description`, `blog_quote`, `personal_about`, `location`, `gallery`, `thumb_image`, `category`, `user_id`) VALUES ('$title', '$description', '$Quate', '$About', '$location', '$gallery', '$thumb_image', '$category', '$userId')";


    if(mysqli_query($conn, $sql)){
        echo "<script>
        window.location.href = 'dashboard.php?user_id=' + $userId;
        </script>";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
}