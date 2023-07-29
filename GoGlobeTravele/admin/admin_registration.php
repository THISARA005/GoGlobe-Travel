<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Assuming you have established a database connection ($mysqli)

    // Database connection configuration
    $host = 'localhost';     // MySQL server hostname
    $username = 'root';  // MySQL username
    $password = '';  // MySQL password
    $database = 'goglobetravel';  // MySQL database name

    $mysqli = new mysqli($host, $username, $password, $database);

    // Check the connection
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        // You can handle the connection error gracefully based on your requirements
        exit();
    }

    // Get form data
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    // Hash the password before storing in the database (for security)
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // File upload handling
    $targetDir = "uploads/"; // Replace this with your desired directory to store uploaded photos
    $profilePhoto = $_FILES['profile_photo'];
    $targetFilePath = $targetDir . $profilePhoto;
    move_uploaded_file($_FILES['profile_photo']['tmp_name'], $targetFilePath);

    // Perform SQL insertion
    $query = "INSERT INTO admin (firstname, lastname, email, dob, phone, profile_photo, password) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("sssssss", $firstname, $lastname, $email, $dob, $phone, $targetFilePath, $hashedPassword);
    
    if ($stmt->execute()) {
        // Registration successful
        echo "<script>alert('Registration successful!');</script>";
        // Redirect to the dashboard after showing the success notification
        header("Location: dashboard.php"); // Replace "dashboard.php" with the actual dashboard page
        exit();
    } else {
        // Registration failed
        echo "<script>alert('Registration failed! Please try again.');</script>";
        // Optionally, you can redirect the user to the registration form page in case of failure
        // header("Location: registration_form.php");
        // exit();
    }

    // Close statement and connection
    $stmt->close();
    $mysqli->close();
}
?>