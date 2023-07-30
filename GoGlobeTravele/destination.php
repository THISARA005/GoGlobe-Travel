<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- favicon -->
      <link rel="icon" type="image/png" href="assets/images/favicon.png">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" media="all">
      <!-- Fonts Awesome CSS -->
      <link rel="stylesheet" type="text/css" href="assets/vendors/fontawesome/css/all.min.css">
      <!-- jquery-ui css -->
      <link rel="stylesheet" type="text/css" href="assets/vendors/jquery-ui/jquery-ui.min.css">
      <!-- modal video css -->
      <link rel="stylesheet" type="text/css" href="assets/vendors/modal-video/modal-video.min.css">
      <!-- light box css -->
      <link rel="stylesheet" type="text/css" href="assets/vendors/lightbox/dist/css/lightbox.min.css">
      <!-- slick slider css -->
      <link rel="stylesheet" type="text/css" href="assets/vendors/slick/slick.css">
      <link rel="stylesheet" type="text/css" href="assets/vendors/slick/slick-theme.css">
      <!-- google fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap" rel="stylesheet">
      <!-- Custom CSS -->
      <link rel="stylesheet" type="text/css" href="style.css">
      <title>Travele | Travel & Tour HTML5 template </title>
   </head>
   <body>
      <div id="siteLoader" class="site-loader">
         <div class="preloader-content">
            <img src="assets/images/loader1.gif" alt="">
         </div>
      </div>
      <div id="page" class="full-page">
      <?php include 'topheader.php'; ?>
         <main id="content" class="site-main">
            <!-- Inner Banner html start-->
            <section class="inner-banner-wrap">
               <div class="inner-baner-container" style="background-image: url(assets/images/slider-banner-1.jpg);">
                  <div class="container">
                     <div class="inner-banner-content">
                        <h1 class="inner-title">Destinations</h1>
                     </div>
                  </div>
               </div>
               <div class="inner-shape"></div>
            </section>
            <!-- Inner Banner html end-->
            <!-- destination field html end -->
            <section class="destination-section destination-page">
               <div class="container">
                  <div class="destination-inner destination-three-column">
                    <?php
                    require_once "db_connection.php";

                    // Query to get destination data from the "destination" table
                    $query = "SELECT * FROM destination";

                    $result = mysqli_query($conn, $query);

                    if ($result) {
                        $count = 0;
                        echo '<div class="row">';
                        while ($row = mysqli_fetch_assoc($result)) {
                            $title = $row['title'];
                            $dest_id = $row['dest_id'];
                            $dest_image = $row['pack_image'];
                            $city = $row['city'];

                            echo '
                            <div class="col-lg-7">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="desti-item overlay-desti-item">
                                            <figure class="desti-image">
                                                <img src="' . $dest_image . '" alt="" style="width: 100%; height: 200px; object-fit: cover;">
                                            </figure>
                                            <div class="meta-cat bg-meta-cat">
                                                <a href="#">' . $city . '</a>
                                            </div>
                                            <div class="desti-content">
                                                <h3>
                                                    <a href="#">' . $title . '</a>
                                                </h3>
                                                <div class="rating-start" title="Rated 5 out of 4">
                                                    <span style="width: 53%"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>';

                            // If two destination items are already displayed in the row, close the row and start a new one
                            if ($count % 2 !== 0) {
                                echo '</div><div class="row">';
                            }

                            $count++;
                        }
                        echo '</div>'; // Close the row if there are any remaining items
                    } else {
                        // Error occurred while fetching data
                        echo "Error: " . mysqli_error($conn);
                    }
                    ?>
                  </div>
               </div>
            </section>
            <!-- destination section html start -->
            <!-- subscribe section html start -->
            <section class="subscribe-section" style="background-image: url(assets/images/img16.jpg);">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-7">
                        <div class="section-heading section-heading-white">
                           <h5 class="dash-style">HOLIDAY PACKAGE OFFER</h5>
                           <h2>HOLIDAY SPECIAL 25% OFF !</h2>
                           <h4>Sign up now to recieve hot special offers and information about the best tour packages, updates and discounts !!</h4>
                           <div class="newsletter-form">
                              <form>
                                 <input type="email" name="s" placeholder="Your Email Address">
                                 <input type="submit" name="signup" value="SIGN UP NOW!">
                              </form>
                           </div>
                           <p>Embark on a captivating journey to the world's hidden gems, where breathtaking landscapes, vibrant cultures, and unforgettable adventures await. Discover the extraordinary as you wander off the beaten path and create your own extraordinary travel story. Get ready to redefine wanderlust and unlock the essence of wanderlust! </p>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- subscribe html end -->
         </main>
         <?php include 'footer.php'; ?>
         <a id="backTotop" href="#" class="to-top-icon">
            <i class="fas fa-chevron-up"></i>
         </a>
         <!-- custom search field html -->
         <div class="header-search-form">
            <div class="container">
               <div class="header-search-container">
                  <form class="search-form" role="search" method="get" >
                     <input type="text" name="s" placeholder="Enter your text...">
                  </form>
                  <a href="#" class="search-close">
                     <i class="fas fa-times"></i>
                  </a>
               </div>
            </div>
         </div>
         <!-- header html end -->
      </div>

      <!-- JavaScript -->
      <script src="assets/js/jquery.js"></script>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
      <script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
      <script src="assets/vendors/jquery-ui/jquery-ui.min.js"></script>
      <script src="assets/vendors/countdown-date-loop-counter/loopcounter.js"></script>
      <script src="assets/js/jquery.counterup.js"></script>
      <script src="assets/vendors/modal-video/jquery-modal-video.min.js"></script>
      <script src="assets/vendors/masonry/masonry.pkgd.min.js"></script>
      <script src="assets/vendors/lightbox/dist/js/lightbox.min.js"></script>
      <script src="assets/vendors/slick/slick.min.js"></script>
      <script src="assets/js/jquery.slicknav.js"></script>
      <script src="assets/js/custom.min.js"></script>
   </body>
</html>
