<?php
// Assuming you have established a database connection ($mysqli)
require_once "db_connection.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Extract data from the form submission
  $title = $_POST['name'];
  $description = $_POST['description'];
  $grpSize = $_POST['grpSize'];
  // ... Extract other form fields ...

  $packageId = YOUR_PACKAGE_ID; // Replace with the package ID you want to update

  // Update the packages table with the new data
  $updateQuery = "UPDATE packages SET title = '$title', description = '$description', grp_size = '$grpSize' WHERE pack_ID = $packageId";
  $updateResult = mysqli_query($mysqli, $updateQuery);

  if ($updateResult) {
    // Insert the price change into the change_pack_price table
    $oldPrice = YOUR_OLD_PRICE; // Replace with the old price (you need to fetch it before updating the table)
    $newPrice = $_POST['new_price']; // Replace with the input field name for new price
    $currentDate = date('Y-m-d'); // Get the current date

    $insertPriceChangeQuery = "INSERT INTO change_pack_price (pack_id, oldPrice, newPrice, date) VALUES ($packageId, '$oldPrice', '$newPrice', '$currentDate')";
    $insertPriceChangeResult = mysqli_query($mysqli, $insertPriceChangeQuery);

    if ($insertPriceChangeResult) {
      echo json_encode(array('success' => true));
    } else {
      echo json_encode(array('success' => false, 'message' => 'Failed to insert price change.'));
    }
  } else {
    echo json_encode(array('success' => false, 'message' => 'Failed to update package data.'));
  }
} else {
  echo json_encode(array('success' => false, 'message' => 'Invalid request method.'));
}

// Remember to close the database connection
mysqli_close($mysqli);
?>
