<?php

require_once 'db_connection.php';

$userId = $_GET['user_id']; 

$query = "SELECT * FROM user_blog WHERE user_id = $userId ORDER BY blog_ID DESC";
$result = mysqli_query($conn, $query);

if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        
        $blog_id = $row['blog_ID'];
        $title = $row['title'];
        $description = $row['description'];
        $blog_quote = $row['blog_quote'];
        $personal_about = $row['personal_about'];
        $location = $row['location'];
        $thumb_image = $row['thumb_image'];
        $Posteddate = $row['Posteddate'];
        // Create a base64 encoded string from the image data.


        echo "<div class='grid-item col-md-6'>
        <article class='post'>
           <figure class='feature-image'>
              <a href='#'>
                 <img src=$thumb_image alt=''>
              </a>
           </figure>
           <div class='entry-content'>
              <h3>
                 <a href='#'>$title</a>
              </h3>
              <div class='entry-meta'>
                 
                 <span class='posted-on'>
                    <a href='#'>$Posteddate</a>
                 </span>
                 <span class='comments-link'>
                    <a href='#'>No Comments</a>
                 </span>
              </div>
              <p>$description.</p>
              <a href='' class='button-text'>CONTINUE READING..</a>
           </div>
        </article>
     </div>";

    }
} else {
    echo "No packages found.";
}

// Remember to close the database connection
mysqli_close($conn);
?>
