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
                <img src=\"$thumbnail\" alt=\"\">
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
                       $duration_day'/'$duration_night
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
                    <div class='rating-start' title="$ratings 5 out of 5">
                       <span style="width: 60%"></span>
                    </div>
                 </div>
                 <p>"$description"</p>
                 <div class='btn-wrap'>
                 <a href='#' class='button-text width-6' onclick='checkLogin()'>Book Now<i class='fas fa-arrow-right'></i></a>
                    <a href='#' class='button-text width-6'>Wish List<i class='far fa-heart'></i></a>
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




<section class="package-section">
               <div class="container">
                  <div class="section-heading text-center">
                     <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                           <h5 class="dash-style">EXPLORE GREAT PLACES</h5>
                           <h2>POPULAR PACKAGES</h2>
                           <p>"Unleash your wanderlust and explore the world's most captivating destinations. From awe-inspiring landscapes to cultural marvels, embark on a journey of a lifetime as you delve into great places that will leave you breathless. Choose from our curated popular packages and unlock the gateway to extraordinary experiences that will redefine your travel aspirations."</p>
                        </div>
                     </div>
                  </div>
                  <div class="package-inner">
                     <div class="row">
                        
                       <div class="col-lg-4 col-md-6">
                           <div class="package-wrap">
                              <figure class="feature-image">
                                 <a href="#">
                                    <img src="assets/images/img6.jpg" alt="">
                                 </a>
                              </figure>
                              <div class="package-price">
                                 <h6>
                                    <span>$1,230 </span> / per person
                                 </h6>
                              </div>
                              <div class="package-content-wrap">
                                 <div class="package-meta text-center">
                                    <ul>
                                       <li>
                                          <i class="far fa-clock"></i>
                                          5D/4N
                                       </li>
                                       <li>
                                          <i class="fas fa-user-friends"></i>
                                          People: 8
                                       </li>
                                       <li>
                                          <i class="fas fa-map-marker-alt"></i>
                                          Kandy
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="package-content">
                                    <h3>
                                       <a href="#">Temple of tooth relic</a>
                                    </h3>
                                    <div class="review-area">
                                       <span class="review-text">(17 reviews)</span>
                                       <div class="rating-start" title="Rated 5 out of 5">
                                          <span style="width: 100%"></span>
                                       </div>
                                    </div>
                                    <p>Unveil the divine aura of the Temple of the Tooth Relic, a sacred sanctuary where the sacred tooth relic of Lord Buddha resides. Immerse yourself in centuries of spiritual heritage, witnessing the profound reverence and exquisite architecture. Experience a moment of serenity and embrace the timeless significance of this revered site.</p>
                                    <div class="btn-wrap">
                                    <a href="#" class="button-text width-6" onclick="checkLogin()">Book Now<i class="fas fa-arrow-right"></i></a>
                                       <a href="#" class="button-text width-6">Wish List<i class="far fa-heart"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                           <div class="package-wrap">
                              <figure class="feature-image">
                                 <a href="#">
                                    <img src="assets/images/img7.jpg" alt="">
                                 </a>
                              </figure>
                              <div class="package-price">
                                 <h6>
                                    <span>$2,000 </span> / per person
                                 </h6>
                              </div>
                              <div class="package-content-wrap">
                                 <div class="package-meta text-center">
                                    <ul>
                                       <li>
                                          <i class="far fa-clock"></i>
                                          6D/5N
                                       </li>
                                       <li>
                                          <i class="fas fa-user-friends"></i>
                                          People: 6
                                       </li>
                                       <li>
                                          <i class="fas fa-map-marker-alt"></i>
                                          Galle
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="package-content">
                                    <h3>
                                       <a href="#">Vacation to the water city of Galle</a>
                                    </h3>
                                    <div class="review-area">
                                       <span class="review-text">(22 reviews)</span>
                                       <div class="rating-start" title="Rated 5 out of 5">
                                          <span style="width: 80%"></span>
                                       </div>
                                    </div>
                                    <p>Escape to the enchanting water city of Galle. Immerse yourself in history, culture, and coastal beauty. Discover the captivating charm of ancient fortifications, pristine beaches, and delightful cuisine. Galle awaits, ready to make your vacation unforgettable.</p>
                                    <div class="btn-wrap">
                                    <a href="#" class="button-text width-6" onclick="checkLogin()">Book Now<i class="fas fa-arrow-right"></i></a>
                                       <a href="#" class="button-text width-6">Wish List<i class="far fa-heart"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     
                  </div>
               </div>
            </section>