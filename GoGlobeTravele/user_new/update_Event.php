<?php

// update_Event.php

$connect = new PDO('mysql:host=localhost;dbname=goglobetravel', 'root', '');

$user_id = isset($_GET['user_id']) ? $_GET['user_id'] : null;

if (isset($_POST["id"])) {
    $query = "
    UPDATE events 
    SET title=:title, start_event=:start_event, end_event=:end_event 
    WHERE id=:id AND user_id=:user_id
    ";
    $statement = $connect->prepare($query);
    $statement->execute(
        array(
            ':title' => $_POST['title'],
            ':start_event' => $_POST['start'],
            ':end_event' => $_POST['end'],
            ':id' => $_POST['id'],
            ':user_id' => $user_id
        )
    );
}

?>
