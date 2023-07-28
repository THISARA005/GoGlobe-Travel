<?php
session_start();
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
      <?php $pack_id = $_GET['pack_id']; ?>
         </header>
         <main id="content" class="site-main">
            <!-- Inner Banner html start-->
            <section class="inner-banner-wrap">
               <div class="inner-baner-container" style="background-image: url(assets/images/slider-banner-1.jpg);">
                  <div class="container">
                     <div class="inner-banner-content">
                        <h1 class="inner-title">Your package Cart</h1>
                     </div>
                  </div>
               </div>
               <div class="inner-shape"></div>
            </section>
            <!-- Inner Banner html end-->
            <div class="step-section cart-section">
               <div class="container">
                  <div class="step-link-wrap">
                     <div class="step-item active">
                        Your cart
                        <a href="#" class="step-icon"></a>
                     </div>
                     <div class="step-item">
                        Your Details
                        <a href="#" class="step-icon"></a>
                     </div>
                     <div class="step-item">
                        Finish
                        <a href="#" class="step-icon"></a>
                     </div>
                  </div>
                  <!-- step one form html start -->
                  <div class="cart-list-inner">
                     <form action="#">
                        <div class="table-responsive">
                          <table class="table">
                            <thead>
                              <tr>
                                <th></th>
                                <th>Package Name</th>
                                <th>Price</th>
                                <th>Check In Date</th>
                                <th>Sub Total</th>
                              </tr>
                            </thead>
                            
                            <?php include 'cart-details.php'; ?>
                            </tbody>
                            
                            </tbody>
                          </table>
                        </div>
                        <div class="updateArea">
                          <div class="input-group">
                              <input type="text" class="form-control" placeholder="I have a discount coupon">
                              <a href="#" class="outline-primary">apply coupon</a>
                          </div>
                          
                        <!-- <a href="#" class="outline-primary update-btn" id="updateCartBtn" onclick="updateCart()">Update cart</a>  -->
                          <a href="#" class="outline-primary update-btn" id="clearCartBtn "onclick="clearCart()">Clear cart</a>

                        </div>
                        <!-- <div class="totalAmountArea">
                           <ul class="list-unstyled">
                              <li><strong>Sub Total</strong> <span>$ 3400.00</span></li>
                              <li><strong>Vat</strong> <span>$ 18.00</span></li>
                              <li><strong>Grand Total</strong> <span class="grandTotal">$ 4012.00</span></li>
                           </ul>
                        </div> -->
                        <?php include 'cart-price-section.php'; ?>
                        <div class="checkBtnArea text-right">
                          <a class="button-primary" onclick="checkLoginforcheckout()">checkout</a>
                        </div>
                      </form>
                  </div>
                  <!-- step one form html end -->
               </div>
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
      <script >
    function checkLogin() {
      const urlParams = new URLSearchParams(window.location.search);
        const loginStatus = urlParams.get('login');
        const userId = urlParams.get('user_id');

        if (loginStatus === 'success' && userId) {
            // User is logged in and has a user_id, proceed with booking
            // Pass the user_id to the booking.html page if needed
            window.location.href = 'tour-cart.php?user_id=' + userId;
        } else {
            // User is not logged in or user_id is missing, display error message
            alert('You need to log in to book.');
        }
        
    }
    function updateCart() {
  // Retrieve the pack_id from the URL
  const urlParams = new URLSearchParams(window.location.search);
  const packId = urlParams.get('pack_id');
  const userId = urlParams.get('user_id');
      
  // Make sure pack_id is available

  if (packId && userId) {
            // User is logged in and has a user_id, proceed with booking
            // Pass the user_id to the booking.html page if needed
            window.location.href = 'update_cart.php?user_id=' + userId + '&pack_id=' + packId;
        } else {
            // User is not logged in or user_id is missing, display error message
            alert('You need to log in to book.');
        }
}

function clearCart() {
  // Retrieve the pack_id from the URL
  const urlParams = new URLSearchParams(window.location.search);
  const packId = urlParams.get('pack_id');
  const userId = urlParams.get('user_id');
      
  // Make sure pack_id is available

  if (packId && userId) {
            // User is logged in and has a user_id, proceed with booking
            // Pass the user_id to the booking.html page if needed
            window.location.href = 'clear_cart.php?user_id=' + userId + '&pack_id=' + packId;
        } else {
            // User is not logged in or user_id is missing, display error message
            alert('You need to log in to book.');
        }
}


   function checkLoginforcheckout() {
      const urlParams = new URLSearchParams(window.location.search);
         const loginStatus = urlParams.get('login');
         const userId = urlParams.get('user_id');
         const packId = urlParams.get('pack_id');
        
        
         if (userId) {

            window.location.href = 'booking.php?user_id=' + userId + '&pack_id=' + packId;

         } else {
            // User is not logged in or user_id is missing, display error message
            alert('You need to log in to book.');
         }
        
    }

   
    // Function to remove a package from the cart and UI


    // Function to remove a package from the cart and UI
    function removeFromCart(packId) {
        if (confirm("Are you sure you want to remove this package from the cart?")) {
            // Send an AJAX request to delete the package from the cart
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState === 4 && this.status === 200) {
                    var response = this.responseText;
                    if (response === "success") {
                        // If removal is successful, remove the row from the UI
                        var rowToRemove = document.getElementById("cart_item_" + packId);
                        if (rowToRemove) {
                            rowToRemove.remove();
                        } else {
                            //alert("Row not found. Removal may not have been successful.");
                        }
                    } else {
                        alert("Error removing package from the cart. Please try again later.");
                    }
                }
            };
            xhttp.open("GET", "remove_from_cart.php?pack_id=" + packId, true);
            xhttp.send();
        }
    }

    // Bind click event to all the 'Remove' buttons
    var removeButtons = document.querySelectorAll(".close");
    for (var i = 0; i < removeButtons.length; i++) {
        removeButtons[i].addEventListener("click", function () {
            var packId = this.dataset.packId; // Get the packId directly from the button's dataset
            removeFromCart(packId);
        });
    }



    // Bind click event to all the 'Remove' buttons
    var removeButtons = document.querySelectorAll(".close");
    for (var i = 0; i < removeButtons.length; i++) {
        removeButtons[i].addEventListener("click", function () {
            var packId = this.dataset.packId; // Get the packId directly from the button's dataset
            removeFromCart(packId);
        });
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