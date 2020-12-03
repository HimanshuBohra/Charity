    <?php
        session_start();
    ?>
    <!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="Colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Charity</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">=
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">
			<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>

			<!-- Start Header Area -->
			<header class="default-header">
				<div class="container">
					<div class="header-wrap">
						<div class="header-top d-flex justify-content-between align-items-center">
							<div class="logo">
								<a href="#home"><img src="img/logo.png" alt=""></a>
							</div>
							<div class="main-menubar d-flex align-items-center">
								<nav class="hide">
									<a href="index.php">Home</a>
									<a href="aboutus.html">About</a>
                                    <a href="donate.php">Donate</a>
                                    <?php
										if(isset($_SESSION['user_id'])){
											echo " <a href='logout.php'>Logout</a>";	
										}else{
											echo "<a href='signin_registration.html'>Signup/Login</a>";
										}
									?>
								</nav>
								<div class="menu-bar"><span class="lnr lnr-menu"></span></div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<!-- End Header Area -->
			
			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
						<div class="row fullscreen align-items-center justify-content-start" style="height: 915px;">
							<div class="banner-content col-lg-9 col-md-12">
								<h1>
									Your Donation <br>
									is Others Inspiration
								</h1>
								<a href="donate.php" class="head-btn btn text-uppercase">Donate Now</a>
							</div>
						</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start callto Area -->
				<section class="callto-area relative">
					<div class="container">
						<div class="row d-flex callto-wrap justify-content-between pt-40 pb-40">
							<h3 class="text-white">Please Help them and Donate now</h3>
							<a href="#" class="head-btn head-btn2 btn text-uppercase">Donate Now</a>
						</div>
					</div>
				</section>
			<!-- End callto Area -->


			<!-- Start project Area -->
			<section class="project-area section-gap" id="project">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-8 pb-80 header-text">
							<h1>Waiting for Help</h1>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> labore  et dolore magna aliqua.
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-4 project-wrap">
							<div class="single-project">
								<div class="content">
								    <a href="#" target="_blank">
								      <div class="content-overlay"></div>
								  		 <img class="content-image img-fluid d-block mx-auto" src="img/p1.jpg" alt="">
								      	<div class="content-details fadeIn-bottom">
								      		<a href="#" class="head-btn btn text-uppercase">Donate Now</a>
								      	</div>
								    </a>
								 </div>
							</div>
							<div class="details">
								<a href="#"><h2>Easy Flight Search</h2></a>
						  		<p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct.</p>
						  		<a class="text-uppercase" href="#">read more</a>
							</div>

						</div>
						<div class="col-lg-4 col-md-4 project-wrap">
							<div class="single-project">
								<div class="content">
								    <a href="#" target="_blank">
								      <div class="content-overlay"></div>
								  		 <img class="content-image img-fluid d-block mx-auto" src="img/p2.jpg" alt="">
								      	<div class="content-details fadeIn-bottom">
								      		<a href="#" class="head-btn btn text-uppercase">Donate Now</a>
								      	</div>
								    </a>
								 </div>
							</div>
							<div class="details">
								<a href="#"><h2>Easy Flight Search</h2></a>
						  		<p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct.</p>
						  		<a class="text-uppercase" href="#">read more</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 project-wrap">
							<div class="single-project">
								<div class="content">
								    <a href="#" target="_blank">
								      <div class="content-overlay"></div>
								  		 <img class="content-image img-fluid d-block mx-auto" src="img/p3.jpg" alt="">
								      	<div class="content-details fadeIn-bottom">
								      		<a href="#" class="head-btn btn text-uppercase">Donate Now</a>
								      	</div>
								    </a>
								 </div>
							</div>
							<div class="details">
								<a href="#"><h2>Easy Flight Search</h2></a>
						  		<p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct.</p>
						  		<a class="text-uppercase" href="#">read more</a>
							</div>
						</div>

					</div>
				</div>
			</section>
			<!-- End project Area -->

			<!-- Start about Area -->
			<section class="about-area" id="about">
				<div class="container-fluid">
					<div class="row d-flex justify-content-end align-items-center">
						<div class="col-lg-6 col-md-12 about-left no-padding">
							<img class="img-fluid" src="img/about-img.jpg" alt="">
						</div>
						<div class="col-lg-6 col-md-12 about-right">
							<h1>A very Lovely Welcome <br>
							to our Company</h1>
							<p>
								inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed.
							</p>
							<button class="primary-btn mt-20 text-uppercase ">learn more<span class="lnr lnr-arrow-right"></span></button>
						</div>
					</div>
				</div>
			</section>
			<!-- End about Area -->

			<!-- Start volunteer Area -->
			<section class="volunteer-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-8 pb-80 header-text">
							<h1>Our Volunteers</h1>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> labore  et dolore magna aliqua.
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3 col-md-3 vol-wrap">
							<div class="single-vol">
								<div class="content">
								    <a href="#" target="_blank">
								      <div class="content-overlay"></div>
								  		 <img class="content-image img-fluid d-block mx-auto" src="img/v1.jpg" alt="">
								      	<div class="content-details fadeIn-bottom">
								      		<h4>Andy Florence</h4>
								      		<p>
								      			inappropriate behavior
								      		</p>
								      	</div>
								    </a>
								 </div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 vol-wrap">
							<div class="single-vol">
								<div class="content">
								    <a href="#" target="_blank">
								      <div class="content-overlay"></div>
								  		 <img class="content-image img-fluid d-block mx-auto" src="img/v2.jpg" alt="">
								      	<div class="content-details fadeIn-bottom">
								      		<h4>Andy Florence</h4>
								      		<p>
								      			inappropriate behavior
								      		</p>
								      	</div>
								    </a>
								 </div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 vol-wrap">
							<div class="single-vol">
								<div class="content">
								    <a href="#" target="_blank">
								      <div class="content-overlay"></div>
								  		 <img class="content-image img-fluid d-block mx-auto" src="img/v3.jpg" alt="">
								      	<div class="content-details fadeIn-bottom">
								      		<h4>Andy Florence</h4>
								      		<p>
								      			inappropriate behavior
								      		</p>
								      	</div>
								    </a>
								 </div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 vol-wrap">
							<div class="single-vol">
								<div class="content">
								    <a href="#" target="_blank">
								      <div class="content-overlay"></div>
								  		 <img class="content-image img-fluid d-block mx-auto" src="img/v4.jpg" alt="">
								      	<div class="content-details fadeIn-bottom">
								      		<h4>Andy Florence</h4>
								      		<p>
								      			inappropriate behavior
								      		</p>
								      	</div>
								    </a>
								 </div>
							</div>
						</div>

					</div>
				</div>
			</section>
			<!-- End volunteer Area -->





			<!-- start footer Area -->
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row d-flex flex-column justify-content-center">
						<ul class="footer-menu">
							<li><a href="#home">Home</a></li>
							<li><a href="#project">Projects</a></li>
							<li><a href="#about">About</a></li>
							<li><a href="#donate">Donate</a></li>
						</ul>
						<div class="footer-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>
			<script src="js/jquery.sticky.js"></script>
			<script src="js/parallax.min.js"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>
			<script src="js/main.js"></script>
		</body>
	</html>
