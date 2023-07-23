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
      <?php include 'logged_page_Header.php'; ?>
      
         <main id="content" class="site-main">
            <!-- Inner Banner html start-->
            <section class="inner-banner-wrap">
               <div class="inner-baner-container" style="background-image: url(assets/images/inner-banner.jpg);">
                  <div class="container">
                     <div class="inner-banner-content">
                        <h1 class="inner-title">Package Detail</h1>
                     </div>
                  </div>
               </div>
               <div class="inner-shape"></div>
            </section>
            <!-- Inner Banner html end-->
            <div class="single-tour-section">
               <div class="container">
                  <div class="row">
                  <?php include 'package-detail-section.php'; ?>
                     <div class="col-lg-4">
                        <div class="sidebar">
                        <?php include 'pack-price-section.php'; ?>
                           <div class="widget-bg booking-form-wrap">
                              <h4 class="bg-title">Booking</h4>
                              <form class="booking-form" action="booking-section.php?user_id=<?php echo $_GET['user_id']; ?>&pack_id=<?php echo $_GET['pack_id']; ?>" method="POST" > 
                                 <div class="row">
                                    <div class="col-sm-12">
                                       <div class="form-group">
                                          <input name="name_booking" type="text" placeholder="Full Name" >
                                       </div>
                                    </div>
                                    <div class="col-sm-12">
                                       <div class="form-group">
                                          <input name="email_booking" type="text" placeholder="Email" >
                                       </div>
                                    </div>
                                    <div class="col-sm-12">
                                       <div class="form-group">
                                          <input name="phone_booking" type="text" placeholder="Number" >
                                       </div>
                                    </div>
                                    <div class="col-sm-12">
                                       <div class="form-group">
                                          <input name="note" type="text" placeholder="Note to calander" >
                                       </div>
                                    </div>
                                    <div class="col-sm-12">
                                       <div class="form-group">
                                          <input class="input-date-picker" type="text" name="date" autocomplete="off" readonly="readonly" placeholder="Check in Date" >
                                       </div>
                                    </div>
                                    <div class="col-sm-12">
                                       <h4 class="">Add Options</h4>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                          <label class="checkbox-list">
                                             <input type="checkbox" name="s">
                                             <span class="custom-checkbox"></span>
                                             Tour guide
                                          </label>
                                       </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                          <label class="checkbox-list">
                                             <input type="checkbox" name="s">
                                             <span class="custom-checkbox"></span>
                                             Insurance 
                                          </label>
                                       </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                          <label class="checkbox-list">
                                             <input type="checkbox" name="s">
                                             <span class="custom-checkbox"></span>
                                             Dinner
                                          </label>
                                       </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                          <label class="checkbox-list">
                                             <input type="checkbox" name="s">
                                             <span class="custom-checkbox"></span>
                                             Bike rent
                                          </label>
                                       </div>
                                    </div>
                                    <div class="header-btn">
                                    <!-- <a href="#" class="button-primary" onclick="checkLogin()" type="submit">BOOK NOW</a> -->
                                    <input type="submit" class="button-primary" name="submit" onclick="checkLogin()" value="Add to cart">
                                       </div>
                                    </div>
                                 </div>
                              </form>
                           </div>
                           <div class="widget-bg information-content text-center">
                              <h5>TRAVEL TIPS</h5>
                              <h3>NEED TRAVEL RELATED TIPS & INFORMATION</h3>
                              <p>Mollit voluptatem perspiciatis convallis elementum corporis quo veritatis aliquid blandit, blandit torquent, odit placeat. </p>
                              <a href="#" class="button-primary">GET A QUOTE</a>
                           </div>
                           <div class="travel-package-content text-center" style="background-image: url(assets/images/img11.jpg);">
                          
                              <h3>OTHER TRAVEL PACKAGES</h3>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus.</p>
                              <ul>
                                 <li>
                                    <a href="#"><i class="far fa-arrow-alt-circle-right"></i>Vacation packages</a>
                                 </li>
                                 <li>
                                    <a href="#"><i class="far fa-arrow-alt-circle-right"></i>Honeymoon packages</a>
                                 </li>
                                 <li>
                                    <a href="#"><i class="far fa-arrow-alt-circle-right"></i>New year packages</a>
                                 </li>
                                 <li>
                                    <a href="#"><i class="far fa-arrow-alt-circle-right"></i>Weekend packages</a>
                                 </li>
                              </ul>
                           
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- subscribe section html start -->
            <section class="subscribe-section" style="background-image: url(assets1/images/img16.jpg);">
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
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Eaque adipiscing, luctus eleifend temporibus occaecat luctus eleifend tempo ribus.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- subscribe html end -->
         </main>
         <?php include 'footer.php'; ?>

      <!-- JavaScript -->
      <script>
    function checkLogin() {
    const urlParams = new URLSearchParams(window.location.search);
    const loginStatus = urlParams.get('login');
    const userId = urlParams.get('user_id');
    const packId = urlParams.get('pack_id');
    
    if (userId) {
        // User is logged in and has a user_id, proceed with booking
        // Pass the user_id and pack_id to the booking.html page if needed
        //window.location.href = 'insert_cart.php?user_id=' + userId + '&pack_id=' + packId;
        //window.location.href = 'booking-section.php?user_id=' + userId + '&pack_id=' + packId;
    } else {
        // User is not logged in or user_id is missing, display error message
        alert('You need to log in to book.');
    }
   }
</script>

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