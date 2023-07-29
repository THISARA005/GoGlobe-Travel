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

$user_id = $_GET['user_id'];
$pack_id = $_GET['pack_id'];


$query = "SELECT * FROM packages where pack_ID = $pack_id";
$result = mysqli_query($mysqli, $query);




if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
       $thumbnail = $row['thumb_image'];
        $pack_id = $row['pack_ID'];
        // Create a base64 encoded string from the image data
        $programm=$row['program'];
        $price = $row['reg_price'];
        $duration_day = $row['duration_days'];
        $duration_night = $row['duration_nights'];
        $people = $row['grp_size'];
    
        $title = $row['title'];
        $ratings = $row['ratings'];
        $review=$row['reviews'];
        $description = $row['pack_description'];
        $location = $row['location'];
        

        echo "<div class='col-lg-8'>
        <div class='single-tour-inner'>
           <h2>$title</h2>
           <figure class='feature-image'>
              <img src='uploads/'.$thumbnail>
              <div class='package-meta text-center'>
                 <ul>
                    <li>
                       <i class='far fa-clock'></i>
                       $duration_day'/'$duration_night
                    </li>
                    <li>
                       <i class='fas fa-user-friends'></i>
                       People: $people
                    </li>
                    <li>
                       <i class='fas fa-map-marked-alt'></i>
                       $location
                    </li>
                 </ul>
              </div>
           </figure>
           <div class='tab-container'>
              <ul class='nav nav-tabs' id='myTab' role='tablist'>
                 <li class='nav-item'>
                    <a class='nav-link active' id='overview-tab' data-toggle='tab' href='#overview'role='tab' aria-controls='overview' aria-selected='true'>DESCRIPTION</a>
                 </li>
                 <li class='nav-item'>
                    <a class='nav-link' id='program-tab' data-toggle='tab' href='#program' role='tab' aria-controls='program' aria-selected='false'>PROGRAMM</a>
                 </li>
                 <li class='nav-item'>
                    <a class='nav-link' id='review-tab' data-toggle='tab' href='#review' role='tab' aria-controls='review' aria-selected='false'>REVIEW</a>
                 </li>
                 <li class='nav-item'>
                    <a class='nav-link' id='map-tab' data-toggle='tab' href='#map' role='tab' aria-controls='map' aria-selected='false'>MAP</a>
                 </li>
              </ul>
              <div class='tab-content' id='myTabContent'>
                 <div class='tab-pane fade show active' id='overview' role='tabpanel' aria-labelledby='overview-tab'>
                    <div class='overview-content'>
                       <p>$description</p>
                       <!--<p>Occaecat pariatur! Quaerat ligula, ab, consequuntur orci mus ultricies praesent aute blandit beatae nisl aut, totam mauris rhoncus? Tellus netus fringilla class auctor dui. Dolores excepteur, doloribus, blanditiis aliquip nisl..</p>
                       <ul>
                         <li>- Travel cancellation insurance</li> 
                         <li>- Breakfast and dinner included</li>
                         <li>- Health care included</li>
                         <li>- Transfer to the airport and return to the agency</li>
                         <li>- Lorem ipsum dolor sit amet, consectetur adipiscing</li>
                       </ul>-->
                    </div>
                 </div>
                 <div class='tab-pane' id='program' role='tabpanel' aria-labelledby='program-tab'>
                    <div class='itinerary-content'>
                       <h3>Program <span>( 4 days )</span></h3>
                       <p>$programm</p>
                    </div>
                    <!--
                    <div class='itinerary-timeline-wrap'>
                       <ul>
                          <li>
                             <div class='timeline-content'>
                                <div class='day-count'>Day <span>1</span></div>
                                <h4>Ancient Rome Visit</h4>
                                <p>Nostra semper ultricies eu leo eros orci porta provident, fugit? Pariatur interdum assumenda, qui aliquip ipsa! Dictum natus potenti pretium.</p>
                             </div>
                          </li>
                          <li>
                             <div class='timeline-content'>
                                <div class='day-count'>Day <span>2</span></div>
                                <h4>Classic Rome Sightseeing</h4>
                                <p>Nostra semper ultricies eu leo eros orci porta provident, fugit? Pariatur interdum assumenda, qui aliquip ipsa! Dictum natus potenti pretium.</p>
                             </div>
                          </li>
                          <li>
                             <div class='timeline-content'>
                                <div class='day-count'>Day <span>3</span></div>
                                <h4>Vatican City Visit</h4>
                                <p>Nostra semper ultricies eu leo eros orci porta provident, fugit? Pariatur interdum assumenda, qui aliquip ipsa! Dictum natus potenti pretium.</p>
                             </div>
                          </li>
                          <li>
                             <div class='timeline-content'>
                                <div class='day-count'>Day <span>4</span></div>
                                <h4>Italian Food Tour</h4>
                                <p>Nostra semper ultricies eu leo eros orci porta provident, fugit? Pariatur interdum assumenda, qui aliquip ipsa! Dictum natus potenti pretium.</p>
                             </div>
                          </li>
                       </ul>
                    </div>-->
                 </div>
                 <div class='tab-pane' id='review' role='tabpanel' aria-labelledby='review-tab'>
                    <div class='summary-review'>
                       <div class='review-score'>
                          <span>$ratings</span>
                       </div>
                       <div class='review-score-content'>
                          <h3>
                             Excellent
                             <span>( Based on 24 reviews )</span>
                          </h3>
                          <p>Tincidunt iaculis pede mus lobortis hendrerit eveniet impedit aenean mauris qui, pharetra rem doloremque laboris euismod deserunt non, cupiditate, vestibulum.</p>
                       </div>
                    </div>
                    <!-- review comment html -->
                    <div class='comment-area'>
                       <h3 class='comment-title'>3 Reviews</h3>
                       <div class='comment-area-inner'>
                          <ol>
                              <li>
                                <figure class='comment-thumb'>
                                   <img src='assets/images/img20.jpg' alt=''>
                                </figure>
                                <div class='comment-content'>
                                   <div class='comment-header'>
                                      <h5 class='author-name'>Tom Sawyer</h5>
                                      <span class='post-on'>Jana 10 2020</span>
                                      <div class='rating-wrap'>
                                         <div class='rating-start' title='Rated 5 out of 5'>
                                            <span style='width: 90%;'></span>
                                         </div>
                                      </div>
                                   </div>
                                   <p>Officia amet posuere voluptates, mollit montes eaque accusamus laboriosam quisque cupidatat dolor pariatur, pariatur auctor.</p>
                                   <a href='#' class='reply'><i class='fas fa-reply'></i>Reply</a>
                                </div>
                              </li>
                              <li>
                                <ol>
                                   <li>
                                      <figure class='comment-thumb'>
                                      <img src='assets/images/img21.jpg' alt=''>
                                      </figure>
                                      <div class='comment-content'>
                                         <div class='comment-header'>
                                            <h5 class='author-name'>John Doe</h5>
                                            <span class='post-on'>Jana 10 2020</span>
                                            <div class='rating-wrap'>
                                               <div class='rating-start' title='Rated 5 out of 5'>
                                                  <span style='width: 90%'></span>
                                               </div>
                                            </div>
                                         </div>
                                         <p>Officia amet posuere voluptates, mollit montes eaque accusamus laboriosam quisque cupidatat dolor pariatur, pariatur auctor.</p>
                                         <a href='#' class='reply'><i class='fas fa-reply'></i>Reply</a>
                                      </div>
                                   </li>
                                </ol>";

                                 $query2="SELECT * FROM pack_review WHERE pack_ID = $pack_id";
                                 $result2 = mysqli_query($mysqli, $query2);

                                 while($row2 = mysqli_fetch_assoc($result2)){
                                    $review=$row2['review'];
                                    $rating=$row2['ratings'];
                                    $subject=$row2['subject'];
                                    $date=date("Y-m-d");
                                    $user_id=$row2['user_ID'];

                                    $query3="SELECT * FROM users WHERE user_ID = $user_id";
                                    $result3 = mysqli_query($mysqli, $query3);
                                    $row3 = mysqli_fetch_assoc($result3);
                                    $fName=$row3['fName'];
                                    $profile_pic=$row3['profile_pic'];

                                    
                                    
                                    echo "<li>
                                    <figure class='comment-thumb'>
                                    <img src='uploadss/$profile_pic' alt=''>
                                    </figure>
                                    <div class='comment-content'>
                                       <div class='comment-header'>
                                          <h5 class='author-name'>$fName</h5>
                                          <span class='post-on'>$date</span>
                                          <div class='rating-wrap'>
                                             <div class='rating-start' title='Rated 5 out of 5'>
                                                <span style='width: 90%'></span>
                                             </div>
                                          </div>
                                       </div>
                                       <p>$review</p>
                                       <a href='#' class='reply'><i class='fas fa-reply'></i>Reply</a>
                                    </div>
                                 </li>";

                                };

                                echo
                                "
                             </li>
                          </ol>
                          <ol>
                              <li>
                                <figure class='comment-thumb'>
                                   <img src='assets/images/img22.jpg' alt=''>
                                </figure>
                                <div class='comment-content'>
                                   <div class='comment-header'>
                                      <h5 class='author-name'>Jaan Smith</h5>
                                      <span class='post-on'>Jana 10 2020</span>
                                      <div class='rating-wrap'>
                                         <div class='rating-start' title='Rated 5 out of 5'>
                                            <span></span>
                                         </div>
                                      </div>
                                   </div>
                                   <p>Officia amet posuere voluptates, mollit montes eaque accusamus laboriosam quisque cupidatat dolor pariatur, pariatur auctor.</p>
                                   <a href='#' class='reply'><i class='fas fa-reply'></i>Reply</a>
                                </div>
                             </li>
                          </ol>
                       </div>-->
                       <div class='comment-form-wrap'>
                          <h3 class='comment-title'>Leave a Review</h3>
                          <form class='comment-form' action='add-review.php?user_id=" . urlencode($user_id) . "&pack_id=" . urlencode($pack_id) . " ' method='POST'>
                             <div class='full-width rate-wrap'>
                             <label for='rating'>Enter a number between 1 and 5 (with one decimal place):</label>
                             <input type='number' id='rating' name='rating' step='0.1' min='1' max='5' required>
                             
                             </div> 
                             <p>
                                <input type='text' name='subject' placeholder='Subject' name= 'subject'>
                             </p>
                           
                             <p>
                                <input type='text' name='review' placeholder='Add your review' >
                             </p>
                             <p>
                                <input type='submit' name='submit' value='Submit'>
                             </p>
                          </form>
                       </div>
                    </div>
                 </div>
                 <div class='tab-pane' id='map' role='tabpanel' aria-labelledby='map-tab'>";
                 echo "<iframe src='https://maps.google.com/maps?q=" . urlencode($location) . "&output=embed' height='450' allowfullscreen=''></iframe>";
echo "
                 </div>
                 
             </div>
             
           </div>
           <div class='single-tour-gallery'>
              <h3>GALLERY / PHOTOS</h3>
              <div class='single-tour-slider'>
                 <div class='single-tour-item'>
                    <figure class='feature-image'>
                       <img src='assets/images/img28.jpg' alt=''>
                    </figure>
                 </div>
                 <div class='single-tour-item'>
                    <figure class='feature-image'>
                       <img src='assets/images/img29.jpg' alt=''>
                    </figure>
                 </div>
                 
              </div>
           </div>
        </div>
     </div>";


        // Start package section
    
        // End package section
    }
} else {
    echo "No packages found.";
}

// Remember to close the database connection
mysqli_close($mysqli);
?>
