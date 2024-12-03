<?php
require_once '../../Controller/avisC.php'; 
require_once '../../Model/avis.php';

$error = "";
$avis = null;
$avisC = new avisC();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (
        isset($_POST["contenu"]) &&
        isset($_POST["rate"])
    ) {
        if (
            !empty(trim($_POST["contenu"])) &&
            !empty($_POST["rate"])
        ) {
            // Sanitize inputs
            $contenu = htmlspecialchars(trim($_POST["contenu"]));
            $rate = intval($_POST["rate"]); // Convert rate to an integer

            if ($rate >= 1 && $rate <= 5) { // Ensure rate is between 1 and 5
                $avis = new avis(
                    $contenu,
                    $rate,
                    date("Y-m-d H:i:s"), // System-generated date
                    1 
                );

                // Add avis
                $avisC->ajouterAvis($avis);

                // Redirect to the list of avis after successful submission
                header('Location: listAvis.php');
                exit();
            } else {
                $error = "Rating must be between 1 and 5.";
            }
        } else {
            $error = "All fields are required.";
        }
    } else {
        $error = "Missing required information.";
    }
}
?>


<!DOCTYPE html>

<!--
   Template:   Waldo - Responsive HTML5 Portfolio Website Template
   Author:     Themetorium
   URL:        http://themetorium.net
   Notes:		You are free to use prepared helper classes to customize your website. Look into "helper.css" file for more info.  
-->

<html lang="en">
	
<!-- Mirrored from demo.themetorium.net/html/waldo/shop-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Nov 2024 15:51:17 GMT -->
<head>

		<!-- Title -->
		<title>Add A Review</title>

		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Responsive One Page HTML5 Website Template">
		<meta name="keywords" content="HTML5, CSS3, Bootsrtrap, Responsive, Template, Theme, Website" />
		<meta name="author" content="themetorium.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Favicon (http://www.favicon-generator.org/) -->
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="icon" href="favicon.ico" type="image/x-icon">

		<!-- Google font (https://www.google.com/fonts) -->
		<link href='https://fonts.googleapis.com/css?family=Ubuntu+Mono:400,400italic,700,700italic' rel='stylesheet' type='text/css'> <!-- Body font (Ubuntu Mono) -->

		<!-- Bootstrap CSS (http://getbootstrap.com) -->
		<link rel="stylesheet" type='text/css' href="assets/vendor/bootstrap/css/bootstrap.min.css"> <!-- bootstrap CSS (http://getbootstrap.com) -->

		<!-- Libs and Plugins CSS -->
		<link rel="stylesheet" href="assets/vendor/jquery/css/jquery-ui.min.css"> <!-- jquery UI CSS (https://jquery.com) -->
		<link rel="stylesheet" href="assets/vendor/fontawesome/css/fontawesome-all.min.css"> <!-- Font Icons CSS (https://fontawesome.com) Free version! -->
		<link rel="stylesheet" href="assets/vendor/owl-carousel/css/owl.carousel.min.css"> <!-- Owl Carousel CSS (https://owlcarousel2.github.io/OwlCarousel2/) -->
		<link rel="stylesheet" href="assets/vendor/owl-carousel/css/owl.theme.default.min.css"> <!-- Owl Carousel default theme CSS (https://owlcarousel2.github.io/OwlCarousel2/) -->
		<link rel="stylesheet" href="assets/vendor/magnific-popup/css/magnific-popup.css"> <!-- Magnific Popup CSS (http://dimsemenov.com/plugins/magnific-popup/) -->
		<link rel="stylesheet" href="assets/vendor/ytplayer/css/jquery.mb.YTPlayer.min.css"> <!-- YTPlayer CSS (more info: https://github.com/pupunzi/jquery.mb.YTPlayer) -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

		<!-- Theme master CSS -->
		<link rel="stylesheet" type='text/css' href="assets/css/helper.css">
		<link rel="stylesheet" type='text/css' href="assets/css/theme.css">


	</head>

	<body>

		<!-- Begin global search (simple) 
		==================================
		* Use class "gl-search-dark" to enable global search dark style.
		-->
		<div id="global-search" class="gl-s gls-simple">
			
			<!-- Begin global search close button -->
			<div class="global-search-close-wrap">
				<a href="#0" class="global-search-close" title="Close">
					<i class="fas fa-close"></i>
				</a>
			</div>
			<!-- End global search close button -->

			<!-- Begin global search form -->
			<form id="global-search-form" method="get" action="https://demo.themetorium.net/html/waldo/search-results-2.html">
				<input type="text" class="form-control" id="global-search-input" name="search" placeholder="Type your keywords...">
			</form>
			<!-- End global search form -->

		</div>
		<!-- End global search -->

		
		<!-- ===================
		///// Begin header /////
		==================== -->
		<div id="header">

			<!-- Begin logo
			================ -->
			<div id="logo">
				<a href="index.html"><img src="assets/img/logo-dark.png" title="Home" alt="logo"></a>
			</div>
			<!-- End logo -->

			<!-- =================
			///// Begin menu /////
			======================
			* Use class "slide-left", "slide-left-half", "slide-right", "slide-right-half", "slide-top", "slide-bottom" or "zoom-in" to change menu effect.
			-->
			<nav id="menu" class="menu slide-right-half bg-image" style="background-image: url(assets/img/misc/menu-bg-1.jpg); background-position: 50% 50%">

				<!-- Element cover -->
				<div class="cover bg-transparent-5-dark"></div>

				<!-- Begin menu inner -->
				<div id="menu-inner">

					<!-- Begin menu content -->
					<div id="menu-content">

						<!-- Begin menu nav -->
						<div class="menu-nav">
							<ul class="menu-list">
								<li class="has-children">
									<a href="#0" class="sub-menu-trigger">Home</a> 
								</li>
	
								<li class="has-children">
									<a href="#0" class="sub-menu-trigger">Contact Us</a> 
									<ul class="sub-menu">
                                        <li><a href="addReclamation.php">add FeedBack</a></li>
                                        <li><a href="listReclamations.php">Feedback History</a></li>
									</ul>
								</li>
								<li class="has-children active">
									<a href="#0" class="sub-menu-trigger">Review</a> 
									<ul class="sub-menu">
										<li><a href="addAvis.php">Add new Review</a></li>
										<li><a href="listAvis.php">Reviews</a></li>
								
									</ul>
								</li>
							</ul>
						</div>
						<!-- End menu nav -->

					</div>
					<!-- End menu inner -->

					<!-- Begin menu footer -->
					<div class="menu-footer">
						<div class="row">
							<div class="col-sm-6">
								
								<!-- Begin social buttons -->
								<div class="social-buttons">
									<ul>
										<li><a href="#" class="btn btn-primary btn-link" target="_blank" title="Follow us on facebook"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#" class="btn btn-primary btn-link" target="_blank" title="Follow us on twitter"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#" class="btn btn-primary btn-link" target="_blank" title="Follow us on dribbble"><i class="fab fa-dribbble"></i></a></li>
										<li><a href="#" class="btn btn-primary btn-link" target="_blank" title="Follow us on behance"><i class="fab fa-behance"></i></a></li>
										<li><a href="#" class="btn btn-primary btn-link" target="_blank" title="Follow us on linkedin"><i class="fab fa-linkedin-in"></i></a></li>
										<li><a href="#" class="btn btn-primary btn-link" target="_blank" title="Follow us on youtube"><i class="fab fa-youtube"></i></a></li>
									</ul>
								</div>
								<!-- End social buttons -->
								
							</div> <!-- /.col -->

							<div class="col-sm-6 text-right">
								<!-- made with love -->
								<div class="made-with-love hide-from-sm">
									<p>Made With <span class="text-yellow"><i class="far fa-heart"></i></span></p>
								</div>
							</div> <!-- /.col -->
						</div> <!-- /.row -->
					</div>
					<!-- End menu footer -->

				</div>
				<!-- End menu content -->

			</nav>
		
			<div id="header-attriputes">
				<ul>
					<li>
						<!-- Begin menu trigger -->
						<div id="menu-trigger">
							<div class="mt-inner">
								<div class="menu-str">
									<span class="str-1"></span>
									<span class="str-2"></span>
									<span class="str-3"></span>
								</div>
							</div>
							<div class="mt-text">Menu</div>
						</div>
						<!-- End menu trigger -->
					</li>

					<li>
						<!-- Begin global search trigger -->
						<div id="global-search-trigger">
							<a href="#0" class="gst-icon" title="Search...">
								<i class="fas fa-search"></i>
							</a>
						</div>
						<!-- End global search trigger -->
					</li>
				</ul> 

				
			</div>
			<!-- End header attriputes -->

		</div>
		<!-- End header -->


		<!-- *************************************
		*********** Begin body content *********** 
		************************************** -->
		<div id="body-content">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

			<!-- Begin content container -->
			<div id="content-container">

					<div class="container">
						<div class="row">
							<div class="col-md-12">
											
                            <form id="product-review-form" method="POST" action="">
    <h3>Add a Review:</h3>
    <div class="small text-gray margin-bottom-20">
        <em>* All fields are required!</em>
    </div>

    <!-- Begin product add rating -->
    <div class="form-group">
        <label for="rate">Rate this product:</label>
        <div id="rating" class="rating-stars">
            <input type="hidden" name="rate" id="rate" value="0" required>
            <i class="fa fa-star" data-value="1"></i>
            <i class="fa fa-star" data-value="2"></i>
            <i class="fa fa-star" data-value="3"></i>
            <i class="fa fa-star" data-value="4"></i>
            <i class="fa fa-star" data-value="5"></i>
        </div>
    </div>
    <!-- End product add rating -->

    <div class="form-group">
        <textarea class="form-control" name="contenu" rows="6" placeholder="Your Review" required></textarea>
    </div>

    <button type="submit" class="btn btn-primary btn-lg">Submit Review</button>
</form>

<script>
    const stars = document.querySelectorAll('.rating-stars .fa-star');
    const rateInput = document.getElementById('rate');

    stars.forEach((star) => {
        star.addEventListener('click', () => {
            const rating = star.getAttribute('data-value');
            rateInput.value = rating;

            // Highlight stars up to the selected one
            stars.forEach((s, index) => {
                if (index < rating) {
                    s.classList.add('checked');
                } else {
                    s.classList.remove('checked');
                }
            });
        });
    });
</script>

<style>
    .rating-stars .fa-star {
        font-size: 24px;
        color: #ccc;
        cursor: pointer;
    }
    .rating-stars .fa-star.checked {
        color: #ffcc00;
    }
</style>


							</div> <!-- /.col -->
						</div> <!-- /.row -->
					</div> <!-- /.container -->

				</section>
				<!-- End section -->


				<!-- ========================================
				///// Begin similar products (carousel) /////
				========================================= -->
			
				<!-- End similar products -->

			</div>
			<!-- End content container -->


			<!-- ===================
			///// Begin footer /////
			========================
			* Use class "fixed-footer" to enable fixed footer (no effect on small devices).
			-->
			<footer id="footer" class="fixed-footer bg-dark text-gray-2">
				<div class="container-fluid max-width-1200">
					<div class="row">

						<div class="col-md-2">

							<!-- Begin footer list -->
							<div class="footer-list">
								<h4>- Information</h4>
								<ul class="list-unstyled">
									<li><a href="blog-list-2.html">Articles</a></li>
									<li><a href="page-dummy.html">About Our Shop</a></li>
									<li><a href="page-dummy.html">Secure Shopping</a></li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</div>
							<!-- End footer list -->

						</div> <!-- /.col -->

						<div class="col-md-2">

							<!-- Begin footer list -->
							<div class="footer-list">
								<h4>- Our Services</h4>
								<ul class="list-unstyled">
									<li><a href="page-dummy.html">Shipping &amp; Returns</a></li>
									<li><a href="page-dummy.html">International Shipping</a></li>
									<li><a href="page-dummy.html">Terms &amp; Conditions</a></li>
									<li><a href="page-dummy.html">Privacy Policy</a></li>
								</ul>
							</div>
							<!-- End footer list -->

						</div> <!-- /.col -->

						<div class="col-md-4 text-center">

							<!-- Begin footer logo -->
							<div class="footer-logo">
								<a href="index.html"><img src="assets/img/logo-light.png" title="Home" alt="logo"></a>
							</div>
							<!-- End footer logo -->

						</div> <!-- /.col -->

						<div class="col-md-4">

							<!-- Begin social buttons -->
							<div class="social-buttons margin-bottom-15">
								<ul>
									<li><a href="#" class="btn btn-primary btn-link" target="_blank" title="Follow us on facebook"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#" class="btn btn-primary btn-link" target="_blank" title="Follow us on twitter"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#" class="btn btn-primary btn-link" target="_blank" title="Follow us on dribbble"><i class="fab fa-dribbble"></i></a></li>
									<li><a href="#" class="btn btn-primary btn-link" target="_blank" title="Follow us on behance"><i class="fab fa-behance"></i></a></li>
									<li><a href="#" class="btn btn-primary btn-link" target="_blank" title="Follow us on linkedin"><i class="fab fa-linkedin-in"></i></a></li>
									<li><a href="#" class="btn btn-primary btn-link" target="_blank" title="Follow us on youtube"><i class="fab fa-youtube"></i></a></li>
								</ul>
							</div>
							<!-- End social buttons -->

							<!-- Begin subscribe form -->
							<form id="footer-subscribe-form" class="form-btn-inside">
								<div class="form-group">
									<input type="email" class="form-control no-bg" id="footer-subscribe" name="subscribe" placeholder="Subscribe. Enter your email address..." required="">
									<button class="bg-yellow" type="submit"><i class="fas fa-envelope"></i></button>
								</div>
							</form>
							<!-- End subscribe form -->

							<!-- Begin copyright -->
							<div class="copyright">
								Copyright 2016 / All rights reserved <br>
								Designed by <a target="_blank" href="http://themeforest.net/user/themetorium/portfolio">Themetorium</a>
							</div>
							<!-- End copyright -->

						</div> <!-- /.col -->

					</div> <!-- /.row -->
				</div> <!-- /.container -->

				<!-- Scroll to top button -->
				<a href="#body-content" class="scrolltotop sm-scroll"></a>

			</footer>
			<!-- End footer -->


		</div>
		<!-- End body content -->



        

		<!-- ====================
		///// Scripts below /////
		===================== -->

		<!-- Core JS -->
		<script src="assets/vendor/jquery/js/jquery.min.js"></script> <!-- jquery JS (https://jquery.com) -->
		<script src="assets/vendor/jquery/js/jquery-ui.min.js"></script> <!-- jquery UI JS (https://jquery.com) -->
		<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script> <!-- bootstrap JS (http://getbootstrap.com) -->

		<!-- Libs and Plugins JS -->
		<script src="assets/vendor/pace.min.js"></script> <!-- Pace (page loader) JS (http://github.hubspot.com/pace/docs/welcome/) -->
		<script src="assets/vendor/jquery.easing.min.js"></script> <!-- Easing JS (http://gsgd.co.uk/sandbox/jquery/easing/) -->
		<script src="assets/vendor/isotope.pkgd.min.js"></script> <!-- Isotope JS (http://isotope.metafizzy.co) -->
		<script src="assets/vendor/imagesloaded.pkgd.min.js"></script> <!-- ImagesLoaded JS (https://github.com/desandro/imagesloaded) -->
		<script src="assets/vendor/jquery.mousewheel.min.js"></script> <!-- A jQuery plugin that adds cross browser mouse wheel support (https://github.com/jquery/jquery-mousewheel) -->
		<script src="assets/vendor/owl-carousel/js/owl.carousel.min.js"></script> <!-- Owl Carousel JS (https://owlcarousel2.github.io/OwlCarousel2/) -->
		<script src="assets/vendor/magnific-popup/js/jquery.magnific-popup.min.js"></script> <!-- Magnific Popup JS (http://dimsemenov.com/plugins/magnific-popup/) -->
		<script src="assets/vendor/ytplayer/js/jquery.mb.YTPlayer.min.js"></script> <!-- YTPlayer JS (more info: https://github.com/pupunzi/jquery.mb.YTPlayer) -->

		<!-- Theme master JS -->
		<script src="assets/js/theme.js"></script>



		<!--==============================
		///// Begin Google Analytics /////
	===================
		///// End Google Analytics /////
		============================== -->



	</body>


<!-- Mirrored from demo.themetorium.net/html/waldo/shop-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Nov 2024 15:51:19 GMT -->
</html>