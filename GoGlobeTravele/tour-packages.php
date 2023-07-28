<?php
require_once 'db_connection.php';
?>

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
      <link rel="stylesheet" type="text/css" href="assets/vendors/lightbox/dist/css/lightbox.min.css">      <!-- slick slider css -->
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
  
      <?php include 'logged_page_Header.php'; ?>
      
    <?php
        // tour-packages.php

        // Check if the 'category' parameter exists in the URL
        if (isset($_GET['category'])) {
        // Retrieve the selected category from the URL
        $selectedCategory = $_GET['category'];
        $query = "SELECT * FROM packages WHERE category = '$selectedCategory'";
        $result = mysqli_query($conn, $query);

        echo("<main id='content' class='site-main'>
        <!-- Inner Banner html start-->
        <section class='inner-banner-wrap'>
           <div class='inner-baner-container' style='background-image: url(assets/images/inner-banner.jpg);'>
              <div class='container'>
                 <div class='inner-banner-content'>
                    <h1 class='inner-title'>$selectedCategory Packages</h1>
                 </div>
              </div>
           </div>
           <div class='inner-shape'></div>
        </section>");
        echo("<div class='row package-list'>");
        while ($row = mysqli_fetch_assoc($result)) {
            $pack_id=$row['pack_ID'];
            $thumb_image=$row['thumb_image'];
            $sale_price=$row['sale_price'];
            $title=$row['title'];
            $description=$row['pack_description'];
            $grp_size=$row['grp_size'];
            $duration_days=$row['duration_days'];
            $duration_nights=$row['duration_nights'];
            $city=$row['location'];
            $ratings=$row['ratings'];


            echo("<div class='col-lg-4 col-md-6'>
            <div class='package-wrap'>
               <figure class='feature-image'>
                  <a href='#'>
                     <img src='uploads/$thumb_image' alt=''>
                  </a>
               </figure>
               <div class='package-price'>
                  <h6>
                     <span>$$sale_price </span> / per person
                  </h6>
               </div>
               <div class='package-content-wrap'>
                  <div class='package-meta text-center'>
                     <ul>
                        <li>
                           <i class='far fa-clock'></i>
                           $duration_days'D'/$duration_nights'N'
                        </li>
                        <li>
                           <i class='fas fa-user-friends'></i>
                           People: $grp_size
                        </li>
                        <li>
                           <i class='fas fa-map-marker-alt'></i>
                           $city
                        </li>
                     </ul>
                  </div>
                  <div class='package-content'>
                     <h3>
                        <a href='#'>$title</a>
                     </h3>
                     <div class='review-area'>
                        <span class='review-text'>(25 reviews)</span>
                        <div class='rating-start' title='Rated $ratings out of 5'>
                           <span style='width: 60%''></span>
                        </div>
                     </div>
                     <p>$description.</p>
                     <div class='btn-wrap'>
                     <a href='#' class='button-text width-6' onclick='checkLogin($pack_id)'>Read more<i class='fas fa-arrow-right'></i></a>
                        <a href='#' class='button-text width-6'>Wish List<i class='far fa-heart'></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>");



        }
        // Now, you can use $selectedCategory to filter the tour packages
        // Fetch and display the tour packages belonging to the selected category
        // ...
        } else {
        // If no category is selected, display all tour packages
        // ...
        ech("<div class='inner-banner-content'>
                    <h1 class='inner-title'>No Packages found Packages</h1>
                 </div>");
        }
        ?>
        </div>
        </main>
        
         <footer id="colophon" class="site-footer footer-primary">
            <div class="top-footer">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-3 col-md-6">
                        <aside class="widget widget_text">
                           <h3 class="widget-title">
                              About Travel
                           </h3>
                           <div class="textwidget widget-text">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
                           </div>
                           <div class="award-img">
                              <a href="#"><img src="assets/images/logo6.png" alt=""></a>
                              <a href="#"><img src="assets/images/logo2.png" alt=""></a>
                           </div>
                        </aside>
                     </div>
                     <div class="col-lg-3 col-md-6">
                        <aside class="widget widget_text">
                           <h3 class="widget-title">CONTACT INFORMATION</h3>
                           <div class="textwidget widget-text">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                              <ul>
                                 <li>
                                    <a href="#">
                                       <i class="fas fa-phone-alt"></i>
                                       +01 (977) 2599 12
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#">
                                       <i class="fas fa-envelope"></i>
                                       company@domain.com
                                    </a>
                                 </li>
                                 <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    3146  Koontz, California
                                 </li>
                              </ul>
                           </div>
                        </aside>
                     </div>
                     <div class="col-lg-3 col-md-6">
                        <aside class="widget widget_recent_post">
                           <h3 class="widget-title">Latest Post</h3>
                           <ul>
                              <li>
                                 <h5>
                                    <a href="#">Life is a beautiful journey not a destination</a>
                                 </h5>
                                 <div class="entry-meta">
                                    <span class="post-on">
                                       <a href="#">August 17, 2021</a>
                                    </span>
                                    <span class="comments-link">
                                       <a href="#">No Comments</a>
                                    </span>
                                 </div>
                              </li>
                              <li>
                                 <h5>
                                    <a href="#">Take only memories, leave only footprints</a>
                                 </h5>
                                 <div class="entry-meta">
                                    <span class="post-on">
                                       <a href="#">August 17, 2021</a>
                                    </span>
                                    <span class="comments-link">
                                       <a href="#">No Comments</a>
                                    </span>
                                 </div>
                              </li>
                           </ul>
                        </aside>
                     </div>
                     <div class="col-lg-3 col-md-6">
                        <aside class="widget widget_newslatter">
                           <h3 class="widget-title">SUBSCRIBE US</h3>
                           <div class="widget-text">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                           </div>
                           <form class="newslatter-form">
                              <input type="email" name="s" placeholder="Your Email..">
                              <input type="submit" name="s" value="SUBSCRIBE NOW">
                           </form>
                        </aside>
                     </div>
                  </div>
               </div>
            </div>
            <div class="buttom-footer">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-md-5">
                        <div class="footer-menu">
                           <ul>
                              <li>
                                 <a href="#">Privacy Policy</a>
                              </li>
                              <li>
                                 <a href="#">Term & Condition</a>
                              </li>
                              <li>
                                 <a href="#">FAQ</a>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-2 text-center">
                        <div class="footer-logo">
                           <a href="#"><img src="assets/images/travele-logo.png" alt=""></a>
                        </div>
                     </div>
                     <div class="col-md-5">
                        <div class="copy-right text-right">Copyright © 2021 Travele. All rights reserveds</div>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
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
        <Script>
  function checkLogin(pack_ID) {
    const urlParams = new URLSearchParams(window.location.search);
    const loginStatus = urlParams.get('login');
    const userId = urlParams.get('user_id');
    const packId = pack_ID;
    if (userId) {
        // User is logged in and has a user_id, proceed with booking
        // Pass the user_id and pack_id to the booking.html page if needed
        window.location.href = 'package-detail.php?user_id=' + userId + '&pack_id=' + packId;
    } else {
        // User is not logged in or user_id is missing, display error message
        alert('You need to log in to book.');
    }
   }
        </script>
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