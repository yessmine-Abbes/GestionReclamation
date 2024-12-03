<?PHP
    require_once '../../Controller/avisC.php'; 

	$avisC=new avisC();
	$listeAvis=$avisC->afficherAvis();
    
if(isset($_POST['submit']))
{
	$listeAvis=$avisC->afficherAvis();
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
		<title>Exocet Chair - Waldo</title>

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
											<!-- Begin product review wrap -->
											<div class="product-review-wrap">

    <!-- Begin product reviews -->
    <div class="product-reviews">
        <h2 class="product-reviews-heading">Reviews :</h2>
        <div class="add-review-button text-right">
    <a href="addAvis.php" class="btn btn-primary btn-lg">
        <i class="fas fa-plus"></i> Add Review
    </a>
</div>

        <!-- Loop through the reviews -->
        <?php foreach ($listeAvis as $avis): ?>
            <div class="product-single-review">

                <!-- Begin review meta -->
                <div class="psr-meta">

                    <!-- Review author -->
                    <div class="psr-author">
                        <strong>UserName</strong> – <span><?php echo htmlspecialchars($avis['date']); ?></span>
                    </div>

                    <!-- Review rating -->
                    <div class="product-ratting">
                        <?php 
                        // Generate stars based on the rate value
                        for ($i = 1; $i <= 5; $i++) {
                            if ($i <= $avis['rate']) {
                                echo '<i class="fas fa-star"></i>'; // Filled star
                            } else {
                                echo '<i class="far fa-star"></i>'; // Empty star
                            }
                        }
                        ?>
                    </div>

                </div>
                <!-- End review meta -->

                <!-- Review content -->
                <div class="psr-text">
                    <?php echo htmlspecialchars($avis['contenu']); ?>
                </div>

                <!-- Delete review form -->
                <form action="deleteAvis.php" method="post" onsubmit="return confirm('Are you sure you want to delete this review?');">
                    <input type="hidden" name="id" value="<?php echo $avis['idAvis']; ?>">
                    <button type="submit" class="btn btn-danger btn-sm">
                        <i class="fas fa-trash"></i> Delete
                    </button>
                </form>

            </div>
        <?php endforeach; ?>
        <!-- End product single review -->

    </div>
    <!-- End product reviews -->

</div>

									
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