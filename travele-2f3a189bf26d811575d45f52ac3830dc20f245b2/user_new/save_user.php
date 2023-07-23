<?php
include 'db_connection.php'; // Include the database connection file

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   // Get the form data
   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $phone = $_POST['phone'];
   $city = $_POST['city'];
   $country = $_POST['country'];
   $password = $_POST['password'];
   $username = $_POST['username'];
   $email = $_POST['email'];
   $age = $_POST['age'];
 
   $profile_picture = $_FILES['profile_picture']['name']; // File name of the uploaded profile picture

   // Encrypt the password
   $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

   // Move the uploaded profile picture to a desired location (optional)
   $targetDir = 'uploads/'; // Directory to store the uploaded profile pictures
   $targetFilePath = $targetDir . $profile_picture;
   move_uploaded_file($_FILES['profile_picture']['tmp_name'], $targetFilePath);

   // Insert the form data into the database
   $sql = "INSERT INTO users (fName, Lname, mobile, city, country, password_hash, username, email, profile_pic,age) 
           VALUES ('$firstname', '$lastname', '$phone', '$city', '$country', '$hashedPassword', '$username', '$email', '$profile_picture','$age')";

   if (mysqli_query($conn, $sql)) {
      // Data inserted successfully
      echo "User data saved successfully.";
   } else {
      // Error occurred while inserting data
      echo "Error: " . mysqli_error($conn);
   }
}
?>
