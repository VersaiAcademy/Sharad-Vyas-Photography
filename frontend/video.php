<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Sharad Vyas Photography</title>
	<meta charset="UTF-8">
	<meta name="description" content="Photographer html template">
	<meta name="keywords" content="photographer, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicon -->
	<link href="../img/favicon.ico" rel="shortcut icon"/>

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
    <style>
        /* Thumbnail container for uniform size */
.thumbnail-container {
  width: 100%;
  height: 100%; /* Fixed minimum height for consistency */
  overflow: hidden;
  border-radius: 8px; /* Rounded corners */
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
  position: relative;
}

.thumbnail-img {
  width: 100%;
  height: 100%;
  object-fit: cover; /* Ensure the image fills the container without distortion */
  transition: transform 0.3s ease;
}

.thumbnail-container:hover .thumbnail-img {
  transform: scale(1.05); /* Slight zoom effect on hover */
}

/* Media Info styling */
.media-info {
  padding: 22px;
  background: linear-gradient(to bottom, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.6));
  border-radius: 0 0 8px 8px;
  color: #f1f1f1;
  position: absolute;
  bottom: 0;
  width: 100%;
  box-sizing: border-box;
  opacity: 0.6;
  transition: opacity 0.3s ease;
}

.media-info:hover {
  opacity: 1;
}

.media-title {
  font-size: 16px;
  font-weight: bold;
  margin: 0 0 4px;
  color: #ffffff;
}

.media-date,
.media-description {
  font-size: 14px;
  margin: 0;
  color: #dcdcdc;
}

/* Masonry link container */
.masonry-link {
  display: block;
  position: relative;
}

/* Overall media item styling */
.media-item {
  position: relative;
  border-radius: 8px;
  overflow: hidden;
}

        </style>

    
</head>
<body>
	<!-- Page Preloader -->
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
	<!-- Header section end -->

	<!-- Hero section -->
	<div class="hero-section">
		<div class="container-fluid">
			<!-- Masonry Grid -->
			<div id="media-gallery-video" class="masonry-grid">
				<!-- Media items will be dynamically added here -->
			</div>
		</div>

	</div>
	<!-- Hero section end -->

	<footer class="footer-section">
		<div class="container-fluid">
			<div class="row mt-2">
				<div class="col-md-6 order-1 order-md-2">
					<div class="footer-social-links">
					<a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a>
    <a href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram"></i></a>
    <a href="https://www.twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
    <a href="https://www.youtube.com/@sharadkumarvyas1" target="_blank"><i class="fa fa-youtube"></i></a>
					</div>
				</div>
				<div class="col-md-6 order-2 order-md-1">
					<div class="copyright">
  <!-- Link back to Versai Technology can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">Versai Technology</a>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/instafeed.min.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/main.js"></script>
    <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <script src="js/script.js"></script>
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
