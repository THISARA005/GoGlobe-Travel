<?php

// Assuming you have established a database connection ($mysqli)

// Database connection configuration
$host = 'localhost';     // MySQL server hostname
$username = 'root';  // MySQL username
$password = '';  // MySQL password
$database = 'goglobetravel';  // MySQL database name

// Create a new MySQLi object
$mysqli = new mysqli($host, $username, $password, $database);

// Check the connection
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    // You can handle the connection error gracefully based on your requirements
    exit();
}


$query = "SELECT * FROM packages ORDER BY ratings DESC LIMIT 3";
$result = mysqli_query($mysqli, $query);

if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
       $thumbnail = $row['thumb_image'];
        $pack_id = $row['pack_ID'];
        // Create a base64 encoded string from the image data
        
        $price = $row['reg_price'];
        $duration_day = $row['duration_days'];
        $duration_night = $row['duration_nights'];
        $people = $row['grp_size'];
    
        $title = $row['title'];
        $ratings = $row['ratings'];
        
        $description = $row['pack_description'];
        

        echo "<div class='col-lg-4 col-md-6'>
        <div class='package-wrap'>
           <figure class='feature-image'>
              <a href='package-detail.php'>
                <img src= 'uploads/$thumbnail'>
              </a>
           </figure>
           <div class='package-price'>
              <h6>
                 <span>$price</span> / per person
              </h6>
           </div>
           <div class='package-content-wrap'>
              <div class='package-meta text-center'>
                 <ul>
                    <li>
                       <i class='far fa-clock'></i>
                       $duration_day D/$duration_night N
                    </li>
                    <li>
                       <i class='fas fa-user-friends'></i>
                       People: $people
                    </li>
                    <li>
                       <i class='fas fa-map-marker-alt'></i>
                       Galle
                    </li>
                 </ul>
              </div>
              <div class='package-content'>
                 <h3>
                    <a href='package-detail.php'>$title</a>
                 </h3>
                 <div class='review-area'>
                    <span class='review-text'>(25 reviews)</span>
                    <div class='rating-start' title='$ratings 5 out of 5'>
                       <span style='width: 60%'></span>
                    </div>
                 </div>
                 <p>$description</p>
                 <div class='btn-wrap'>
                 <a href='#' class='button-text width-6' onclick='checkLogin($pack_id)'>Read more<i class='fas fa-arrow-right'></i></a>

                 <a href='#' class='button-text width-6' onclick='addToWishlist($pack_id)'>Wishlist<i class='far fa-heart'></i></a>
                 </div>
              </div>
           </div>
        </div>
     </div>
     <!-- Add this script section to the end of your HTML file, before the closing </body> tag -->
     <script>
     function addToWishlist(pack_id) {
         // Send an AJAX request to the server
         var xhr = new XMLHttpRequest();
         xhr.open('POST', 'add_to_wishlist.php', true);
         xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
         
         // You may want to pass additional data along with the pack_id if needed
         var data = 'pack_id='' + pack_id;
         
         xhr.onreadystatechange = function() {
             if (xhr.readyState === XMLHttpRequest.DONE) {
                 if (xhr.status === 200) {
                     // The request was successful
                     // You can show a success message or update the UI here if needed
                     console.log('Package added to wishlist.');
                 } else {
                     // The request failed
                     // You can show an error message here if needed
                     console.error('Failed to add package to wishlist.');
                 }
             }
         };
         
         // Send the request with the data
         xhr.send(data);
     }
     </script>
     
     
     ";

    }
} else {
    echo "No packages found.";
}

// Remember to close the database connection
mysqli_close($mysqli);
?>
