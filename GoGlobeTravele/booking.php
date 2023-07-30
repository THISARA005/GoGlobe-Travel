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
      <style>
   .checkbox-list input[type="checkbox"]:not(:checked) + .custom-checkbox::before {
      border-color: red;
   }
</style>
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
            <div class="step-section booking-section">
               <div class="container">
                  <div class="step-link-wrap">
                     <div class="step-item active">
                        Your cart
                        <a href="#" class="step-icon"></a>
                     </div>
                     <div class="step-item active">
                        Your Details
                        <a href="#" class="step-icon"></a>
                     </div>
                     <div class="step-item">
                        Finish
                        <a href="#" class="step-icon"></a>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-8 right-sidebar">
                        <!-- step one form html start -->
                        <form action="booking-invoice.php?user_id=<?php echo $_GET['user_id']; ?>&pack_id=<?php echo $_GET['pack_id']; ?>" method="POST">
                        <div class="booking-form-wrap">
                           
                           <div class="booking-content">
                              <div class="form-title">
                                 <span>1</span>
                                 <h3>Payment Information</h3>
                              </div>
                              <div class="row">
                                 <div class="col-12">
                                    <div class="form-group">
                                       <label>Name on card*</label>
                                       <input type="text" class="form-control" name="card_Name">
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <div class="row align-items-center">
                                       <div class="col-sm-6">
                                          <div class="form-group">
                                             <label>Card number*</label>
                                             <input type="text" id="card_number" name="card_number" class="form-control">
                                          </div>
                                       </div>
                                       <div class="col-sm-6">
                                          <img src="assets/images/cards.png" alt="Cards">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <div class="row">
                                       <div class="col-md-6">
                                          <label>Expiration date*</label>
                                          <div class="row">
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                   <input type="text" id="expire_month" name="expire_month" class="form-control" placeholder="MM">
                                                </div>
                                             </div>
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                   <input type="text" id="expire_year" name="expire_year" class="form-control" placeholder="Year">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label>Security code*</label>
                                             <div class="row">
                                                <div class="col-4">
                                                   <div class="form-group">
                                                      <input type="text" id="ccv" name="ccv" class="form-control" placeholder="CCV">
                                                   </div>
                                                </div>
                                                <div class="col-8">
                                                   <img src="assets/images/icon_ccv.gif" alt="ccv"><small>Last 3 digits</small>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>        
                           </div>                         
                           <div class="form-policy">
                              <h3>Cancellation policy</h3>
                              <div class="form-group">
                                 <label class="checkbox-list">
                                    <input type="checkbox" id="acceptCheckbox" name="acceptCheckbox">
                                    <span class="custom-checkbox"></span>
                                    I accept terms and conditions and general policy.
                                 </label>
                              </div>
                              <input type="submit" class="button-primary" name="submit" onclick="checkLogin()" value="Pay Now">

                           </div>

                        
                        </div>

                        </form>
                        <!-- step one form html end -->
                     </div>
                     <div class="col-lg-4">
                        <aside class="sidebar">
                           <!-- <div class="widget-bg widget-table-summary">
                              <h4 class="bg-title">Summary</h4>
                              <table>
                                 <tbody>
                                    <tr>
                                       <td>
                                          <strong>Packages cost </strong>
                                       </td>
                                       <td class="text-right">
                                          $300
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <strong>Dedicated tour guide</strong>
                                       </td>
                                       <td class="text-right">
                                          $34
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <strong>Insurance</strong>
                                       </td>
                                       <td class="text-right">
                                          $34
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <strong>tax</strong>
                                       </td>
                                       <td class="text-right">
                                          13%
                                       </td>
                                    </tr>
                                    <tr class="total">
                                       <td>
                                          <strong>Total cost</strong>
                                       </td>
                                       <td class="text-right">
                                          <strong>$368</strong>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div> -->
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