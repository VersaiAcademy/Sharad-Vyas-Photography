<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Sharad Vyas Photography</title>
	<meta charset="UTF-8">
	<meta name="description" content="Photographer html template">
	<meta name="keywords" content="photographer, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicon -->
	<link href="./img/favicon.ico" rel="shortcut icon"/>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="./frontend/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="./frontend/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="./frontend/css/magnific-popup.css"/>
	<link rel="stylesheet" href="./frontend/css/slicknav.min.css"/>
	<link rel="stylesheet" href="./frontend/css/owl.carousel.min.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="./frontend/css/style.css"/>

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<!-- Page Preloader -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section  -->
	<?php include('./config.php'); ?>
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
        <li><a href="<?php echo BASE_URL; ?>frontend/gallery-folder.php">Folder Gallery</a></li>
        <li><a href="<?php echo BASE_URL; ?>frontend/contact.php">Contact</a></li>
    </ul>
</header>

	<div class="clearfix"></div>
	<!-- Header section end -->

	<!-- Carousel -->
	<div class="container-fluid carousel-container">
		<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
				<!-- Placeholder Items -->
				<div class="carousel-item active">
					<img src="" class="d-block w-100 carousel-image" alt="Placeholder Image 1">
				</div>
				<div class="carousel-item">
					<img src="" class="d-block w-100 carousel-image" alt="Placeholder Image 2">
				</div>
				<div class="carousel-item">
					<img src="" class="d-block w-100 carousel-image" alt="Placeholder Image 3">
				</div>
			</div>
		</div>
	</div>

	<!-- Hero section -->
	<div class="hero-section">
		<div class="container-fluid">
			<!-- Masonry Grid -->
			<div id="media-gallery" class="masonry-grid">
				<!-- Media items will be dynamically added here -->
			</div>
		</div>
		<div class="hero-social-links">
			<a href="#"><i class="fa fa-pinterest"></i></a>
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-dribbble"></i></a>
			<a href="#"><i class="fa fa-behance"></i></a>
		</div>
	</div>
	<!-- Hero section end -->

	<!-- Intro section -->
	<section class="intro-section">
		<div class="intro-warp">
			<div class="container-fluid pattern">
				<div class="row">
					<div class="col-xl-7 col-lg-7 p-0">
						<div class="intro-text">
							<h2>My name is Sharad Vyas. I’m a reputed judge in Churu, Rajasthan with a passion for photography.</h2>
							<p>With years of experience serving as a judge in the courts of Churu, Rajasthan, I’ve developed a deep sense of justice and precision in my work. Beyond the courtroom, I have a keen interest in photography, capturing moments of beauty in nature and life. Photography serves as a creative outlet for me, allowing me to explore different perspectives and express my passion for capturing the world through the lens. This hobby complements my professional life, offering a balance between logic and creativity.</p>
							<a href="./portfolio.php" class="sp-link">Take a look @my portfolio</a>
						</div>
					</div>
					<div class="col-xl-5 col-lg-5 p-0">
						<!-- Sample Card -->
						<div class="e-card playing">
							<div class="image"></div>
							<div class="wave"></div>
							<div class="wave"></div>
							<div class="wave"></div>
							<div class="infotop">
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="icon">
									<path fill="currentColor" d="..."></path>
								</svg>
								<br>Passionate For My Camera<br>
								<div class="name">Capturing Life</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Intro section end -->

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
<script src="./frontend/js/jquery-3.2.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<script src="./frontend/js/bootstrap.min.js"></script>
	<script src="./frontend/js/jquery.slicknav.min.js"></script>
	<script src="./frontend/js/owl.carousel.min.js"></script>
	<script src="./frontend/js/jquery.magnific-popup.min.js"></script>
	<script src="./frontend/js/circle-progress.min.js"></script>
	<script src="./frontend/js/mixitup.min.js"></script>
	<script src="./frontend/js/instafeed.min.js"></script>
	<script src="./frontend/js/masonry.pkgd.min.js"></script>
	<script src="./frontend/js/main.js"></script>
    <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <script src="./frontend/js/script.js"></script>
    <script>
       // Initialize the carousel with a 5-second interval
  const carousel = document.querySelector('#carouselExample');
  const bootstrapCarousel = new bootstrap.Carousel(carousel, {
    interval: 5000, // 5 seconds
    ride: 'carousel'
  });
    </script>
</body>
</html>
