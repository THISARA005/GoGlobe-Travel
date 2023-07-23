<?php

// Include the dbconnection.php file
require_once 'db_connection.php';

// Function to sanitize user input
function sanitizeInput($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the user input from the form
    $username = sanitizeInput($_POST['username']);
    $password = sanitizeInput($_POST['password']);

    // Perform your database query to retrieve the hashed password
    // Replace this with your actual query logic
    $query = "SELECT password_hash FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $hashedPassword = $row['password_hash'];

        // Verify the hashed password
        if (password_verify($password, $hashedPassword)) {
            /// Successful login
    // Start the session
    session_start();

    // Store the user information in the session
    $_SESSION['username'] = $username;

    // Retrieve the user_id from the database
    $query = "SELECT user_id FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $user_id = $row['user_id'];

        // Redirect to the page containing the "Book Now" button with login status and user_id
        header("Location: logged_home.php?login=success&user_id=" . $user_id);
        exit();
    }
        }
    }

    // Invalid credentials
    echo '<script>alert("Invalid username or password. Please try again.");</script>';
}
?>
