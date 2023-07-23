<?php

// load_Event.php

$connect = new PDO('mysql:host=localhost;dbname=goglobetravel', 'root', '');

$user_id = isset($_GET['user_id']) ? $_GET['user_id'] : null;

$data = array();

$query = "SELECT * FROM pack_booking WHERE user_id = :user_id ORDER BY booking_ID"; // Use a named placeholder


$statement = $connect->prepare($query);
$statement->bindValue(':user_id', $user_id, PDO::PARAM_INT); // Bind the user_id to the named placeholder
$statement->execute();

$result = $statement->fetchAll();

foreach ($result as $row) {
    $data[] = array(
        'id' => $row["booking_ID"],
        'title' => $row["note"],
        'start' => $row["check_in_date"],
        //'end' => $row["end_event"]
    );
}

echo json_encode($data);

?>
