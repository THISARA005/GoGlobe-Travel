<?php
// Assuming you have established a database connection ($mysqli)

require_once "db_connection.php";

if (isset($_GET['package_id'])) {
  $packageId = $_GET['package_id'];
  $query = "SELECT * FROM packages WHERE pack_ID = $packageId";
  $result = mysqli_query($mysqli, $query);

  if ($result && mysqli_num_rows($result) > 0) {
    $packageData = mysqli_fetch_assoc($result);
    echo json_encode($packageData);
  } else {
    echo json_encode(array()); // Send an empty object if no data found
  }
} else {
  echo json_encode(array()); // Send an empty object if package_id not provided
}

// Remember to close the database connection
mysqli_close($mysqli);
?>
