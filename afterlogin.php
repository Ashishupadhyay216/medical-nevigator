<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>Medical navigator</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="vendors/animate-css/animate.css">
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
</head>

<body>

	<!--================ Start Header Menu Area =================-->
	<header class="header_area">
		<div class="header-top">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-3 col-sm-6 col-4 header-top-left">
						<select class="default-select">
							<option data-display="English">English</option>
							<option value="1">Germany</option>
							<option value="2">Spanish</option>
						</select>
					</div>
					<div class="col-lg-9 col-sm-6 col-8 header-top-right">
						<a href="tel:+918650368616"><span class="lnr lnr-phone-handset"></span> <span class="text"><span class="text">+918650368616
									</span></span></a>
						<a href="mailto:gla@gmail.com"><span class="lnr lnr-envelope"></span> <span class="text"><span class="text">Cruisedevelopers@gmail.com</span></span></a>
						<a href="appointment.html" class="primary-btn text-uppercase">Appointment</a>
					</div>
				</div>
			</div>
		</div>
		<div class="main_menu">
			<div class="search_input" id="search_input_box">
				<div class="container">
					<form class="d-flex justify-content-between">
						<input type="text" class="form-control" id="search_input" placeholder="Search Here">
						<button type="submit" class="btn"></button>
						<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
					</form>
				</div>
			</div>
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="afterlogin.php">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="about-us.html">About</a></li>
							<li class="nav-item"><a class="nav-link" href="departments.html">Department</a></li>
							<li class="nav-item"><a class="nav-link" href="doctors.html">Doctors</a></li>
                                                        <li class="nav-item"><a class="nav-link" href="elements.html">Contact</a></li>
                                                        <li class="nav-item">
                                                           <?php
                                                            $a=$_POST["username"];
                                                            echo "<br>Welcome<br>" .$a;
                                                           ?>
                                                        </li>
							<li class="nav-item"><a href="#" class="search">
									<i class="lnr lnr-magnifier" id="search"></i></a>
							</li>

						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================ End Header Menu Area =================-->

	<!--================ Start Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<div class="banner_content">
					<h2>
						 Medical navigator <br>
					</h2>
					<p>
						We welcome you to the world of Medical  Navigator to help you in your needs to provide best services around you
					</p>
					<a class="primary-btn text-uppercase" href="login.html">Sign In</a>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Home Banner Area =================-->


	<!--================ Start Features Area =================-->
	<section class="features_area section_gap">
		<div class="container">
			<div class="row">
				<!-- single feature -->
				<div class="col-lg-4 col-md-6">
					<div class="single_feature">
						<div class="feature_head">
							<img src="img/features/icon1.png" alt="">
							<h4>Emergency Services</h4>
						</div>
						<div class="feature_content">
							<p>We are here to provide you best medical facility which are near by your location.Any time at any moment</p>
							<div class="feature_btn">
								<a href="#" class="f_btn">Call Us: +91-9876543210</a>
							</div>
						</div>
					</div>
				</div>
				<!-- single feature -->
				<div class="col-lg-4 col-md-6">
					<div class="single_feature">
						<div class="feature_head">
							<img src="img/features/icon2.png" alt="">
							<h4>Doctors Schedule</h4>
						</div>
						<div class="feature_content">
							<p>We will manage the best doctor according to there schedule so that no time management conflict will occur.</p>
							<div class="feature_btn">
								<a href="#" class="f_btn">Learn More</a>
							</div>
						</div>
					</div>
				</div>
				<!-- single feature -->
				<div class="col-lg-4 col-md-6">
					<div class="single_feature">
						<div class="feature_head">
							<img src="img/features/icon3.png" alt="">
							<h4>Online Appointment</h4>
						</div>
						<div class="feature_content">
							<p>Now ou dont have to worry about appointments just tell us and we will do the rest.</p>
							<div class="feature_btn">
								<a href="#" class="f_btn">Get Appointment</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Features Area =================-->

	<!--================ Start About Area =================-->
	<section class="about_area lite_bg">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5 col-md-5">
					<div class="about_details lite_bg">
						<h2>Welcome to Medical Navigator</h2>
						<p>Here we welcome you from the depth of heart.We are here just to serve for you to make a revolution in the field of medicine.Now you dont have to worry about your medical problems just tell us the problem and we'll take care of the rest of activites .</p>
						<ul class="list_wrap">
							<li class="about_lists">Most of the people die in road accident bcoz of lack of proper medical service now just visit us in case of such incidence and we will tell you best possible and nearest solution.</li>
							<li class="about_lists">We are here to enhence your medic experience.</li>
							<li class="about_lists">we are here to give freedom from medic boundation.</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 offset-lg-3 col-md-6 offset-md-1">
					<div class="about_right overlay">
						<div class="about_inner">
							<h4>Our service area</h4>
							<p>Delhi-NCR </p>
							<p>Mathura </p>
							<p>Meerut </p>
							<p>Mumbai</p>
							<p>Delhi </p>
							<p>Nodia </p>
						</div>

					</div>
				</div>
			</div>
			<div class="about_bg overlay"></div>
		</div>
	</section>
	<!--================ End About Area =================-->

	<!--================ Start Department Area =================-->
	<section class="department_area section_gap">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7">
					<div class="main_title">
						<h2>Medical Navigator Attached Medical services</h2>
						<p>Best infield services which are provided and are bounded with us.</p>
					</div>
				</div>
			</div>

			<div class="row">
				<!-- single department -->
				<div class="col-lg-2 text-center col-sm-6">
					<div class="single_department">
						<div class="dpmt-thumb">
							<img src="img/department/d-icon1.png" alt="">
						</div>
						<h4>Cardiology Department of AIIMS</h4>
					</div>
				</div>
				<!-- single department -->
				<div class="col-lg-2 text-center col-sm-6">
					<div class="single_department">
						<div class="dpmt-thumb">
							<img src="img/department/d-icon2.png" alt="">
						</div>
						<h4>Urology Department of Mendanta</h4>
					</div>
				</div>
				<!-- single department -->
				<div class="col-lg-2 text-center col-sm-6">
					<div class="single_department">
						<div class="dpmt-thumb">
							<img src="img/department/d-icon3.png" alt="">
						</div>
						<h4>Pandey's Dentistry </h4>
					</div>
				</div>
				<!-- single department -->
				<div class="col-lg-2 text-center col-sm-6">
					<div class="single_department">
						<div class="dpmt-thumb">
							<img src="img/department/d-icon4.png" alt="">
						</div>
						<h4>Appolo Eye Care</h4>
					</div>
				</div>
				<!-- single department -->
				<div class="col-lg-2 text-center col-sm-6">
					<div class="single_department">
						<div class="dpmt-thumb">
							<img src="img/department/d-icon5.png" alt="">
						</div>
						<h4>Napeth neurology hub</h4>
					</div>
				</div>
				<!-- single department -->
				<div class="col-lg-2 text-center col-sm-6">
					<div class="single_department">
						<div class="dpmt-thumb">
							<img src="img/department/d-icon6.png" alt="">
						</div>
						<h4>Mendanta dmnt Plastic Surgery</h4>
					</div>
				</div>
				<a class="primary-btn text-uppercase" href="#">Learn More</a>
			</div>
		</div>
	</section>
	<!--================ End Department Area =================-->

	<!--================ Start Counter Area =================-->
	<section class="section_gap counter_area overlay">
		<div class="container">
			<div class="row">
				<!--single-counter-->
				<div class="col-lg-3 col-sm-6">
					<div class="single_counter">
						<h1> <span class="counter_number">5</span>K</h1>
						<p>Years <br> of Experiences</p>
					</div>
				</div>
				<!--single-counter-->
				<div class="col-lg-3 col-sm-6">
					<div class="single_counter">
						<h1> <span class="counter_number">2</span>K+</h1>
						<p>Instant <br> Blood Donors </p>
					</div>
				</div>
				<!--single-counter-->
				<div class="col-lg-3 col-sm-6">
					<div class="single_counter">
						<h1> <span class="counter_number">5</span>K+</h1>
						<p>Well Cured <br> Patients</p>
					</div>
				</div>
				<!--single-counter-->
				<div class="col-lg-3 col-sm-6">
					<div class="single_counter">
						<h1> <span class="counter_number">20</span>K+</h1>
						<p>Internal <br> Stuff Groups</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ Start Counter Area =================-->

	<!--================ Start Team Area =================-->
	<section class="section_gap team_area lite_bg">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7">
					<div class="main_title">
						<h2>Medical Navigator Popular doctors</h2>
						<p>We have some very experienced and well known docotrs who are always ready to serve you.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- single-team-member -->
				<div class="col-lg-3 col-sm-6">
					<div class="single_member">
						<div class="author">
							<img src="img/team/member2.png" alt="">
						</div>
						<div class="author_decs">
							<div class="social_icons">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
							</div>
							<h4>KK singh</h4>
							<p class="profession">Dermalogist</p>
							<p>Specialized in Skin problem and have work experience of 30 years.</p>
						</div>
					</div>
				</div>
				<!-- single-team-member -->
				<div class="col-lg-3 col-sm-6">
					<div class="single_member">
						<div class="author">
							<img src="img/team/member1.png" alt="">
						</div>
						<div class="author_decs">
							<div class="social_icons">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
							</div>
							<h4>Bhaskar Pandey</h4>
							<p class="profession">Dental surgeon</p>
							<p>Work experience of 6 years and expertise in RCT and MPH.</p>
						</div>
					</div>
				</div>
				<!-- single-team-member -->
				<div class="col-lg-3 col-sm-6">
					<div class="single_member">
						<div class="author">
							<img src="img/team/member3.png" alt="">
						</div>
						<div class="author_decs">
							<div class="social_icons">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
							</div>
							<h4>Dr VK gupta</h4>
							<p class="profession">Expertise in Cardiology</p>
							<p>Work Experience of 34 years.</p>
						</div>
					</div>
				</div>
				<!-- single-team-member -->
				<div class="col-lg-3 col-sm-6">
					<div class="single_member">
						<div class="author">
							<img src="img/team/member4.png" alt="">
						</div>
						<div class="author_decs">
							<div class="social_icons">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
							</div>
							<h4>RP Mishra</h4>
							<p class="profession">Neuro Expert</p>
							<p>Consider as one of the best doctor in this field.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Team Area =================-->




	<!--================ Start footer Area  =================-->
	<footer class="footer-area section-gap">
		<div class="footer_top section_gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-3  col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h4 class="text-white">About Us</h4>
							<p>
								We are in developing phase.
							</p>
						</div>
					</div>
					<div class="col-lg-4  col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h4 class="text-white">Contact Us</h4>
							<p>

								gla@gamil.com
							</p>
							<p class="number">
						     +91-9876543210 <br>
								 +91-9874651230
							</p>
						</div>
					</div>
					<div class="col-lg-5  col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h4 class="text-white">Ping us</h4>
							<p>Just ping for any suggestion.</p>
							<div class="d-flex flex-row" id="mc_embed_signup">
								<form class="navbar-form" novalidate="true" action="https://www.facebook.com/medicalservice"
								 method="get">
									<div class="input-group add-on">
										<input class="form-control" name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'"
										 required="" type="email">
										<div style="position: absolute; left: -5000px;">
											<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
										</div>
										<div class="input-group-btn">
											<button class="genric-btn text-uppercase">
												get started
											</button>
										</div>
									</div>
									<div class="info mt-20"></div>
								</form>

							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="d-flex justify-content-between align-items-center flex-wrap">
					<p class="footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					<div class="footer-social d-flex align-items-center">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--================ End footer Area  =================-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="vendors/lightbox/simpleLightbox.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="vendors/counter-up/jquery.waypoints.min.js"></script>
	<script src="vendors/counter-up/jquery.counterup.js"></script>
	<script src="js/mail-script.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/theme.js"></script>
</body>

</html>
