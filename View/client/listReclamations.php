<?PHP
    require_once '../../Controller/ReclamationC.php'; 
    require_once '../../Controller/ReponseC.php'; 

	$reclamationC=new reclamationC();
	$listeReclamation=$reclamationC->afficherReclamations();
    
if(isset($_POST['submit']))
{
	$listeReclamation=$reclamationC->afficherReclamations();
}


?>
<!DOCTYPE html>
<html lang="en">
	<head>

		<!-- Title -->
		<title>Reclamations</title>

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

        <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

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
			<!-- End menu -->

			
			<!-- ==============================
			///// Begin header attriputes /////
			=============================== -->
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

			<!-- Begin content container -->
			<div id="content-container">

				<!-- End page header -->


				<!-- ==================================
				///// Begin search result section /////
				=================================== -->
				<section id="search-results-section">
					<div class="container">
						<div class="row">
							<div class="col-md-12">

								<!--Begin search results -->
								<div class="search-results">


									<!-- Begin search result head (from blog) -->
									<div class="search-results-head">
										<div class="row">
											<div class="col-sm-6">
												<h2 class="no-margin">- FeedBack History</h2>
											</div>

												<a href="ChatBot.php" class="button type--C">
													<div class="button__line"></div>
													<div class="button__line"></div>
													<span class="button__text">Ask Kenzo AI</span>
													<div class="button__drow1"></div>
													<div class="button__drow2"></div>
												</a>
												<style>
													/* From Uiverse.io by himanshu9682 */ 
.type--A {
  --line_color: #555555;
  --back_color: #ffecf6;
}
.type--B {
  --line_color: #1b1919;
  --back_color: #FFFF00;
}
.type--C {
  --line_color: #00135c;
  --back_color: #FFFF00;
}
.button {
  position: relative;
  z-index: 0;
  width: 240px;
  height: 56px;
  text-decoration: none;
  font-size: 14px;
  font-weight: bold;
  color: var(--line_color);
  letter-spacing: 2px;
  transition: all 0.3s ease;
}
.button__text {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 100%;
}
.button::before,
.button::after,
.button__text::before,
.button__text::after {
  content: "";
  position: absolute;
  height: 3px;
  border-radius: 2px;
  background: var(--line_color);
  transition: all 0.5s ease;
}
.button::before {
  top: 0;
  left: 54px;
  width: calc(100% - 56px * 2 - 16px);
}
.button::after {
  top: 0;
  right: 54px;
  width: 8px;
}
.button__text::before {
  bottom: 0;
  right: 54px;
  width: calc(100% - 56px * 2 - 16px);
}
.button__text::after {
  bottom: 0;
  left: 54px;
  width: 8px;
}
.button__line {
  position: absolute;
  top: 0;
  width: 56px;
  height: 100%;
  overflow: hidden;
}
.button__line::before {
  content: "";
  position: absolute;
  top: 0;
  width: 150%;
  height: 100%;
  box-sizing: border-box;
  border-radius: 300px;
  border: solid 3px var(--line_color);
}
.button__line:nth-child(1),
.button__line:nth-child(1)::before {
  left: 0;
}
.button__line:nth-child(2),
.button__line:nth-child(2)::before {
  right: 0;
}
.button:hover {
  letter-spacing: 6px;
}
.button:hover::before,
.button:hover .button__text::before {
  width: 8px;
}
.button:hover::after,
.button:hover .button__text::after {
  width: calc(100% - 56px * 2 - 16px);
}
.button__drow1,
.button__drow2 {
  position: absolute;
  z-index: -1;
  border-radius: 16px;
  transform-origin: 16px 16px;
}
.button__drow1 {
  top: -16px;
  left: 40px;
  width: 32px;
  height: 0;
  transform: rotate(30deg);
}
.button__drow2 {
  top: 44px;
  left: 77px;
  width: 32px;
  height: 0;
  transform: rotate(-127deg);
}
.button__drow1::before,
.button__drow1::after,
.button__drow2::before,
.button__drow2::after {
  content: "";
  position: absolute;
}
.button__drow1::before {
  bottom: 0;
  left: 0;
  width: 0;
  height: 32px;
  border-radius: 16px;
  transform-origin: 16px 16px;
  transform: rotate(-60deg);
}
.button__drow1::after {
  top: -10px;
  left: 45px;
  width: 0;
  height: 32px;
  border-radius: 16px;
  transform-origin: 16px 16px;
  transform: rotate(69deg);
}
.button__drow2::before {
  bottom: 0;
  left: 0;
  width: 0;
  height: 32px;
  border-radius: 16px;
  transform-origin: 16px 16px;
  transform: rotate(-146deg);
}
.button__drow2::after {
  bottom: 26px;
  left: -40px;
  width: 0;
  height: 32px;
  border-radius: 16px;
  transform-origin: 16px 16px;
  transform: rotate(-262deg);
}
.button__drow1,
.button__drow1::before,
.button__drow1::after,
.button__drow2,
.button__drow2::before,
.button__drow2::after {
  background: var(--back_color);
}
.button:hover .button__drow1 {
  animation: drow1 ease-in 0.06s;
  animation-fill-mode: forwards;
}
.button:hover .button__drow1::before {
  animation: drow2 linear 0.08s 0.06s;
  animation-fill-mode: forwards;
}
.button:hover .button__drow1::after {
  animation: drow3 linear 0.03s 0.14s;
  animation-fill-mode: forwards;
}
.button:hover .button__drow2 {
  animation: drow4 linear 0.06s 0.2s;
  animation-fill-mode: forwards;
}
.button:hover .button__drow2::before {
  animation: drow3 linear 0.03s 0.26s;
  animation-fill-mode: forwards;
}
.button:hover .button__drow2::after {
  animation: drow5 linear 0.06s 0.32s;
  animation-fill-mode: forwards;
}
@keyframes drow1 {
  0% {
    height: 0;
  }
  100% {
    height: 100px;
  }
}
@keyframes drow2 {
  0% {
    width: 0;
    opacity: 0;
  }
  10% {
    opacity: 0;
  }
  11% {
    opacity: 1;
  }
  100% {
    width: 120px;
  }
}
@keyframes drow3 {
  0% {
    width: 0;
  }
  100% {
    width: 80px;
  }
}
@keyframes drow4 {
  0% {
    height: 0;
  }
  100% {
    height: 120px;
  }
}
@keyframes drow5 {
  0% {
    width: 0;
  }
  100% {
    width: 124px;
  }
}


.button:not(:last-child) {
  margin-bottom: 64px;
}

													</style>
										</div>
									</div>
									<!-- End search result head -->

									<!-- Begin search result item 
									============================== -->
                                    <?php foreach($listeReclamation as $reclamation): ?>

									<div class="search-results-item">
										<div class="row">
											<div class="row-md-height">

												<!-- Column -->
												<a href="blog-single-sidebar-right.html" class="col-md-4 col-md-height sr-item-image bg-image" style="background-image: url(assets/img/FeedBackIcon.Webp);"></a> <!-- /.col -->

												<!-- Column -->
												<div class="col-md-8 col-md-height">

													<!-- Begin search result item info -->
													<div class="sr-item-info">
    <div class="sr-item-category"><a><?php echo $reclamation['date']; ?></a></div>

    <a class="sr-item-title">
        <h2><?php echo $reclamation['subject']; ?></h2>
    </a>

    <div class="sr-item-meta">
        <i class="fas fa-clock-o"></i>
        <span class="published"><?php echo $reclamation['etat']; ?></span>
    </div>

    <div class="sr-item-desc">
        <?php echo $reclamation['description']; ?>
    </div>

    <!-- Display Admin Response or No Response based on Status -->
    <div class="sr-item-response">
        <?php
        if ($reclamation['etat'] == 'Answered') {
            // Fetch the response from the database
            $responseC = new ReponseC();
            $response = $responseC->getResponseByReclamationId($reclamation['idReclamation']);
            
            if ($response) {
                // Display the response text
                echo '<p> Admin Response : ' . $response['text'] . '</p>';
            } else {
                echo '<p>No response found.</p>';
            }
        } else {
            // Display "No response" for Pending status
            echo '<span class="text-muted">No response</span>';
        }
        ?>
    </div>
</div>

													<!-- End search result item info -->
<div class="sr-item-actions mt-3">
    <form action="deleteReclamation.php" method="post" onsubmit="return confirm('Are you sure you want to delete this FeedBack ?');" class="d-inline-block">
        <input type="hidden" name="id" value="<?php echo $reclamation['idReclamation']; ?>">
        <button type="submit" class="btn btn-danger btn-sm">
            <i class="bx bx-trash me-1"></i> Delete
        </button>
    </form>
    <a class="btn btn-warning btn-sm ms-2" href="updateReclamation.php?id=<?php echo $reclamation['idReclamation']; ?>">
    <i class="bx bx-edit me-1"></i> Update
</a>
</div>
</div> <!-- /.col -->
</div> <!-- /.row-height -->
</div> <!-- /.row -->
<br>
<br>
<?php endforeach; ?>



					<!-- Begin load more -->
					<a href="#" class="load-more margin-top-60">
						Load More
					</a>
					<!-- End load more -->

				</section>
				<!-- End search result section -->


			</div>
			<!-- End content container -->


			<!-- ===================
			///// Begin footer /////
			========================
			* Use class "fixed-footer" to enable fixed footer (no effect on small devices).
			-->
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
		============================== -->

		<!-- Paste your Google Analytics code here. 
		Go to http://www.google.com/analytics/ for more information. -->

		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-84668666-1', 'auto');
			ga('send', 'pageview');

		</script>

		<!--==============================
		///// End Google Analytics /////
		============================== -->



	</body>


<!-- Mirrored from demo.themetorium.net/html/waldo/search-results.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Nov 2024 15:51:22 GMT -->
</html>