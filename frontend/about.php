<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Sharad Vyas Photography</title>
	<meta charset="UTF-8">
	<meta name="description" content="Photographer html template">
	<meta name="keywords" content="photographer, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section  -->
	<?php include('../config.php'); ?>
<header class="header-section hs-bd">
    <a href="<?php echo BASE_URL; ?>index.php" class="site-logo"><img src="<?php echo BASE_URL; ?>img/vyasjilogonew.png" alt="logo"></a>
    <div class="header-controls">
        <button class="nav-switch-btn"><i class="fa fa-bars"></i></button>
        <button class="search-btn"><i class="fa fa-search"></i></button>
    </div>
    <ul class="main-menu">
	<li><a href="<?php echo BASE_URL; ?>index.php">Home</a></li>
        <li><a href="<?php echo BASE_URL; ?>frontend/about.php">About the Artist</a></li>
        <li><a href="<?php echo BASE_URL; ?>frontend/portfolio.php">Portfolio</a></li>
        <li><a href="<?php echo BASE_URL; ?>frontend/gallery-folder.php">Drive Folder</a></li>
        <li><a href="<?php echo BASE_URL; ?>frontend/albums.php">Photo Gallery</a></li>
        <li><a href="<?php echo BASE_URL; ?>frontend/video.php">Video Gallery</a></li>
    </ul>
</header>
	<div class="clearfix"></div>
	<!-- Header section end  -->

	<!-- About section  -->
	<section class="about-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 p-0">
					<div class="about-bg set-bg" data-setbg="../img/aboutmesharad.jpg"></div>
				</div>
				<div class="col-lg-6 p-0">
					<div class="about-text">
						<h2>About Me <br/> Sharad Vyas</h2>
<p>I am Sharad Vyas, a respected judge in the Indian judiciary, committed to upholding justice and integrity. Alongside my professional responsibilities, I have a deep passion for travel and capturing the beauty of life. I find immense joy in exploring new places, discovering hidden corners of the world, and experiencing the unique stories each destination has to offer. Photography allows me to freeze these moments and share the wonders of life through my lens. My journey blends both my legal profession and my love for creativity, inspiring me to appreciate the beauty in both life and law.</p>
<!-- <h4>My Clients</h4> -->
						<!-- <p>Company INC, Management INc, Photo album INC, Magnum Express, Fachion Gala, Unnamed, </p>
						<h4>Editorials</h4>
						<p>Vougue, Elle, Company INC, Management INc, Photo album INC, Fashion Week, Fachion Gala, Unnamed, Vanity Fair, Vougue IT</p> -->
						<a href="<?php echo BASE_URL; ?>frontend/contact.php" class="site-btn">Contact me</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- About section end  -->
	<br/>
	<!-- Skills section  -->
	<div class="skill-section set-bg" data-setbg="../img/skills-bg.jpg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="circle-progress text-white" data-cptitle="Passion" data-cpid="id-1" data-cpvalue="99" data-cpcolor="#ffffff"></div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="circle-progress text-white" data-cptitle="Travel" data-cpid="id-2" data-cpvalue="100" data-cpcolor="#ffffff"></div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="circle-progress text-white" data-cptitle="Creativity" data-cpid="id-3" data-cpvalue="95" data-cpcolor="#ffffff"></div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="circle-progress text-white" data-cptitle="Nature" data-cpid="id-4" data-cpvalue="90" data-cpcolor="#ffffff"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- Skills section end  -->
	
	<!-- Services section  -->
	<!-- <section class="services-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="services-item">
						<img src="img/icons/1.png" alt="">
						<h4>Studio Photography</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ul-trices gravida. </p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="services-item">
						<img src="img/icons/2.png" alt="">
						<h4>Wedding Editing</h4>
						<p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="services-item">
						<img src="img/icons/3.png" alt="">
						<h4>Photo on tape</h4>
						<p>Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="services-item">
						<img src="img/icons/4.png" alt="">
						<h4>Modern Editing</h4>
						<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravi-da. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="services-item">
						<img src="img/icons/5.png" alt="">
						<h4>Video Recording</h4>
						<p>Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="services-item">
						<img src="img/icons/6.png" alt="">
						<h4>Video Editing</h4>
						<p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus.</p>
					</div>
				</div>
			</div>
			<div class="text-center">
				<div class="site-btn">Ask for a Quote</div>
			</div>
		</div>
	</section> -->
	<!-- Services section end  -->

	<!-- Instagram section -->
	<!-- <div class="instagram-section">
		<h6>Instagram Feed</h6>
		<div id="instafeed" class="instagram-slider owl-carousel"></div>
	</div> -->
	<!-- Instagram section end -->
	
	<!-- Footer section   -->
	<footer class="footer-section">
		<div class="container-fluid">
			<div class="row mt-2">
				<div class="col-md-6 order-1 order-md-2">
					<div class="footer-social-links">
						<a href=""><i class="fa fa-pinterest"></i></a>
						<a href=""><i class="fa fa-facebook"></i></a>
						<a href=""><i class="fa fa-twitter"></i></a>
						<a href=""><i class="fa fa-dribbble"></i></a>
						<a href=""><i class="fa fa-behance"></i></a>
					</div>
				</div>
				<div class="col-md-6 order-2 order-md-1">
					<div class="copyright">
  <!-- Link back to Versai Technology can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://versai.com" target="_blank">Versai Technology</a>
  <!-- Link back to Versai Technology can't be removed. Template is licensed under CC BY 3.0. -->
</div>
	
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer section end  -->

	<!-- Search model -->
	<div class="search-model">
		<div class="h-100 d-flex align-items-center justify-content-center">
			<div class="search-close-switch">+</div>
			<form class="search-model-form">
				<input type="text" id="search-input" placeholder="Search here.....">
			</form>
		</div>
	</div>
	<!-- Search model end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/instafeed.min.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.10/bodymovin.min.js"></script>
	<script src="js/main.js"></script>

	  
	</body>
</html>
