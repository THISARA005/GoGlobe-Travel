<?php

// insert_event.php

$connect = new PDO('mysql:host=localhost;dbname=goglobetravel', 'root', '');

if (isset($_POST["title"], $_POST["user_id"])) {
    $query = "INSERT INTO events (title, start_event, end_event, user_id) 
              VALUES (:title, :start_event, :end_event, :user_id)";
    $statement = $connect->prepare($query);
    $statement->execute(array(
        ':title'       => $_POST['title'],
        ':start_event' => $_POST['start'],
        ':end_event'   => $_POST['end'],
        ':user_id'     => $_POST['user_id']
    ));
}
?>
