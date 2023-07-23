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
                        <h1 class="inner-title">Booking</h1>
                     </div>
                  </div>
               </div>
               <div class="inner-shape"></div>
            </section>
            <!-- Inner Banner html end-->
            <div class="step-section cart-section">
               <div class="container">
                  <!-- <div class="step-link-wrap">
                     <div class="step-item active">
                        Your cart
                        <a href="#" class="step-icon"></a>
                     </div>
                     <div class="step-item active">
                        Your Details
                        <a href="#" class="step-icon"></a>
                     </div>
                     <div class="step-item active">
                        Finish
                        <a href="#" class="step-icon"></a>
                     </div>
                  </div> -->
                  <!-- step three form html start -->
                  <div class="confirmation-outer">
                     <div class="success-notify">
                        <div class="success-icon">
                           <i class="fas fa-check"></i>
                        </div>
                        <div class="success-content">
                           <h3>PAYMENT CONFIRMED</h3>
                           <p>Thank you, your payment has been successful and your booking is now confirmed.A confirmation email has been sent to info@travele.com.</p>
                        </div>
                     </div>
                     <div class="confirmation-inner">
                        <div class="row">
                        <div class="col-lg-8 right-sidebar">
                              <div class="confirmation-details">
                                 <h3>BOOKING DETAILS</h3>
                        <?php include 'invoice-content.php'; ?>
                                <div class="details payment-details">
                                    <h3>PAYMENT</h3>
                                    <div class="details-desc">
                                       <p>Payment is successful via Master card</p>
                                    </div>
                                 </div>
                                 <div class="details">
                                    <h3>VIEW BOOKING DETAILS</h3>
                                    <div class="details-desc">
                                       <p><a href="#">https://www.travele.com/sadsd-f646556</a></p>
                                    </div>
                                </div>
                                <p></p>
                                <input type="submit" class="button-primary" name="submit" onclick="window.print()" value="Download the reciept">
                            </div>
                            </div>
                           <div class="col-lg-4">
                              <aside class="sidebar">
                              <?php include 'cart-summary-section.php'; ?>
                                 <div class="widget-bg widget-support-wrap">
                                    <div class="icon">
                                       <i class="fas fa-phone-volume"></i>
                                    </div>
                                    <div class="support-content">
                                       <h5>HELP AND SUPPORT</h5>
                                       <a href="telto:12345678" class="phone">+11 234 889 00</a>
                                       <small>Monday to Friday 9.00am - 7.30pm</small>
                                    </div>
                                 </div>
                              </aside>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- step three form html end -->

                  <!-- step three form html end -->
                 
         
               </div>
            </div>
         </main>
         
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