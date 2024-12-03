<?php
require_once '../../Controller/ReclamationC.php'; 
require_once '../../Model/Reclamation.php';

$error = "";
$reclamation = null;
$reclamationC = new ReclamationC();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (
        isset($_POST["description"]) &&
        isset($_POST["subject"])
    ) {
        if (
            !empty(trim($_POST["description"])) &&
            !empty(trim($_POST["subject"]))
        ) {
            // Sanitize inputs
            $description = htmlspecialchars(trim($_POST["description"]));
            $subject = htmlspecialchars(trim($_POST["subject"]));

            $reclamation = new Reclamation(
                $description,
                1, // Static idClient for this example
                "Pending", // Static etat
                date("Y-m-d H:i:s"), // System date
                $subject
            );

            // Add reclamation
            $reclamationC->ajouterReclamation($reclamation);

            // Redirect to the list of reclamations after successful submission
            header('Location: listReclamations.php');
            exit();
        } else {
            $error = "All fields are required.";
        }
    } else {
        $error = "Missing required information.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
	<head>

		<!-- Title -->
		<title>Contact - Waldo</title>

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
	
		<div id="header">

			<!-- Begin logo
			================ -->
			<div id="logo">
				<a href="index.html"><img src="assets/img/logo-light.png" title="Home" alt="logo"></a>
			</div>
			
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

				</div>

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
			

		</div>
		
		<div id="body-content">

			<!-- Begin content container -->
			<div id="content-container">

				
				<section id="page-header" data-percent-height="0.9">

					<!-- Begin page header image -->
					<div class="page-header-image parallax fade-out-scroll-6 bg-image" style="background-image: url(assets/img/page-header/page-header-bg-12.jpg); background-position: 50% 50%;">

						<!-- Begin page header caption -->
						<div class="page-header-caption">
							<h1 class="page-header-title">Contact</h1>
						</div>
					
						<a href="#contact-section" class="scroll-down sm-scroll hide-from-sm" title="Scroll down"></a>
						<!-- End scroll down button -->

					</div>
					<!-- End page header image -->

				</section>
				<!-- End page header -->


				
				<section id="contact-section" class="split-box">
					<div class="container-fluid">
						<div class="row">
							<div class="row-md-height">

								<!-- Column -->
								<div class="col-md-6 col-md-height col-md-middle bg-dark bg-image" style="background-image: url(assets/img/world-map.png); background-position: 50% 50%;">

									<!-- Begin contact info -->
									<div class="contact-info-wrap">
										<div class="contact-info">
											<p><i class="fas fa-home"></i> address: 121 King Street, Melbourne, Australia</p>
											<p><i class="fas fa-phone"></i> phone: +123 456 789 000</p>
											<p><i class="fas fa-envelope"></i> email: <a href="mailto:company@email.com" target="_blank">company@email.com</a></p>
										</div>

										<!-- Begin social buttons -->
										<div class="social-buttons margin-top-20">
											<ul>
												<li><a href="#" class="btn btn-social-min btn-primary-bordered btn-rounded-full" target="_blank" title="Follow us on facebook"><i class="fab fa-facebook-f"></i></a></li>
												<li><a href="#" class="btn btn-social-min btn-primary-bordered btn-rounded-full" target="_blank" title="Follow us on twitter"><i class="fab fa-twitter"></i></a></li>
												<li><a href="#" class="btn btn-social-min btn-primary-bordered btn-rounded-full" target="_blank" title="Follow us on dribbble"><i class="fab fa-dribbble"></i></a></li>
												<li><a href="#" class="btn btn-social-min btn-primary-bordered btn-rounded-full" target="_blank" title="Follow us on behance"><i class="fab fa-behance"></i></a></li>
												<li><a href="#" class="btn btn-social-min btn-primary-bordered btn-rounded-full" target="_blank" title="Follow us on linkedin"><i class="fab fa-linkedin-in"></i></a></li>
												<li><a href="#" class="btn btn-social-min btn-primary-bordered btn-rounded-full" target="_blank" title="Follow us on youtube"><i class="fab fa-youtube"></i></a></li>
											</ul>
										</div>
										<!-- End social buttons -->

									</div>
									<!-- End contact info -->

								</div> <!-- /.col -->

								<!-- Column -->
								<div class="col-md-6 col-md-height">

                                <div class="contact-form-inner">
    <div class="contact-form-info">
    <h2>Get In Touch</h2>
                        <p>Feel free to send your feedback. The admin will respond to you soon.</p>

                        <!-- Display PHP error messages -->
                        <?php if (!empty($error)): ?>
                            <div class="alert alert-danger">
                                <?= htmlspecialchars($error); ?>
                            </div>
                        <?php endif; ?>

                        <!-- Contact Form -->
                        <form id="contact-form" method="POST" action="">
                            <div class="form-group">
                                <label for="subject">Subject:</label>
                                <input 
                                    type="text" 
                                    id="subject" 
                                    name="subject" 
                                    class="form-control" 
                                    placeholder="Enter subject" 
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="description">Description:</label>
                                <textarea 
                                    id="description" 
                                    name="description" 
                                    class="form-control" 
                                    rows="4" 
                                    placeholder="Enter your feedback" 
                                    required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
								</div> 
							</div> 
						</div> 
						
					</div> <!-- /.container -->
				</section>
				
				<section id="map-section">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12 no-padding">

								
					
								<div id="map"></div>
								

							</div> <!-- /.col -->
						</div> <!-- /.row -->
					</div> <!-- /.container -->
				</section>
				<!-- End map section -->


			</div>
		
			
			<footer id="footer" class="fixed-footer bg-dark text-gray-2">
				<div class="container">
					<div class="row">

						<div class="col-md-4">

							<!-- Begin footer text -->
							<div class="footer-text">
								<h4>- Information</h4>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat cum vitae fugit est, eaque ea, quod pariatur numquam!
							</div>
							<!-- End footer text -->

						</div> <!-- /.col -->

						<div class="col-md-4 text-center">

							<!-- Begin footer logo -->
							<div class="footer-logo margin-top-40 margin-bottom-40">
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
	
		<!-- Core JS -->
		<script src="assets/vendor/jquery/js/jquery.min.js"></script> <!-- jquery JS (https://jquery.com) -->
		<script src="assets/vendor/jquery/js/jquery-ui.min.js"></script> <!-- jquery UI JS (https://jquery.com) -->
		<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script> <!-- bootstrap JS (http://getbootstrap.com) -->

		<!-- Libs and Plugins JS -->
		<script src="assets/vendor/pace.min.js"></script> 
		<script src="assets/vendor/jquery.easing.min.js"></script> 
		<script src="assets/vendor/isotope.pkgd.min.js"></script> 
		<script src="assets/vendor/imagesloaded.pkgd.min.js"></script> 
		<script src="assets/vendor/jquery.mousewheel.min.js"></script> 
		<script src="assets/vendor/owl-carousel/js/owl.carousel.min.js"></script> 
		<script src="assets/vendor/magnific-popup/js/jquery.magnific-popup.min.js"></script> 
		<script src="assets/vendor/ytplayer/js/jquery.mb.YTPlayer.min.js"></script> 

		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAo5b533IB2iuDcTn2razvfjyc_rpZdiRw&amp;callback=initMap"></script> 
		<script src="assets/vendor/map.js"></script> 

		<!-- Theme master JS -->
		<script src="assets/js/theme.js"></script>

	</body>


</html>