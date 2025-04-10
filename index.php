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
        <!--<li><a href="<?php echo BASE_URL; ?>frontend/portfolio.php">Portfolio</a></li>
        <li><a href="<?php echo BASE_URL; ?>frontend/gallery-folder.php">Drive Folder</a></li>-->
        <li><a href="<?php echo BASE_URL; ?>frontend/albums.php">Photo Gallery</a></li>
        <li><a href="<?php echo BASE_URL; ?>frontend/video.php">Video Gallery</a></li>
    </ul>
</header>

	<div class="clearfix"></div>
	<!-- Header section end -->

	<!-- Carousel -->
	<!--<div class="container-fluid carousel-container">
		<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
				
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
	</div>-->
	<div id="myCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
  <div class="carousel-inner">
    <!-- Add images here -->
    <div class="carousel-item active">
      <img src="img/slider/slider-1.jpg" class="d-block w-100" alt="Image 1">
    </div>
    <div class="carousel-item">
      <img src="img/slider/slider2.jpg" class="d-block w-100" alt="Image 2">
    </div>
	<div class="carousel-item">
      <img src="img/slider/slider3.jpg" class="d-block w-100" alt="Image 3">
    </div>
	<div class="carousel-item">
      <img src="img/slider/slider4.jpg" class="d-block w-100" alt="Image 3">
    </div>
	<div class="carousel-item">
      <img src="img/slider/slider5.jpg" class="d-block w-100" alt="Image 4">
    </div>
	<div class="carousel-item">
      <img src="img/slider/slider6.jpg" class="d-block w-100" alt="Image 5">
    </div>
	<div class="carousel-item">
      <img src="img/slider/slider7.jpg" class="d-block w-100" alt="Image 6">
    </div>
	<div class="carousel-item">
      <img src="img/slider/slider8.jpg" class="d-block w-100" alt="Image 7">
    </div>
	<div class="carousel-item">
      <img src="img/slider/slider9.jpg" class="d-block w-100" alt="Image 8">
    </div>
	<div class="carousel-item">
      <img src="img/slider/slider10.jpg" class="d-block w-100" alt="Image 9">
    </div>
	<div class="carousel-item">
      <img src="img/slider/slider11.jpg" class="d-block w-100" alt="Image 10">
    </div>
	<div class="carousel-item">
      <img src="img/slider/slider12.jpg" class="d-block w-100" alt="Image 12">
    </div>
	<div class="carousel-item">
      <img src="img/slider/slider13.jpg" class="d-block w-100" alt="Image 13">
    </div>
	<div class="carousel-item">
      <img src="img/slider/slider14.jpg" class="d-block w-100" alt="Image 14">
    </div>
	<div class="carousel-item">
      <img src="img/slider/slider15.jpg" class="d-block w-100" alt="Image 15">
    </div>
	<div class="carousel-item">
      <img src="img/slider/slider16.jpg" class="d-block w-100" alt="Image 16">
    </div>
	<div class="carousel-item">
      <img src="img/slider/slider17.jpg" class="d-block w-100" alt="Image 17">
    </div>
	<div class="carousel-item">
      <img src="img/slider/slider18.jpg" class="d-block w-100" alt="Image 18">
    </div>
	<div class="carousel-item">
      <img src="img/slider/slider19.jpg" class="d-block w-100" alt="Image 19">
    </div>
	<div class="carousel-item">
      <img src="img/slider/slider20.jpg" class="d-block w-100" alt="Image 20">
    </div>
	<div class="carousel-item">
      <img src="img/slider/slider21.jpg" class="d-block w-100" alt="Image 21">
    </div>
	<div class="carousel-item">
      <img src="img/slider/slider22.jpg" class="d-block w-100" alt="Image 22">
    </div>
	<div class="carousel-item">
      <img src="img/slider/slider23.jpg" class="d-block w-100" alt="Image 23">
    </div>
	<div class="carousel-item">
      <img src="img/slider/slider24.jpg" class="d-block w-100" alt="Image 24">
    </div>
	<div class="carousel-item">
      <img src="img/slider/slider25.jpg" class="d-block w-100" alt="Image 25">
    </div>
	<div class="carousel-item">
      <img src="img/slider/slider26.jpg" class="d-block w-100" alt="Image 26">
    </div>
	<div class="carousel-item">
      <img src="img/slider/slider27.jpg" class="d-block w-100" alt="Image 27">
    </div>
	<div class="carousel-item">
      <img src="img/slider/slider28.jpg" class="d-block w-100" alt="Image 28">
    </div>
	<div class="carousel-item">
      <img src="img/slider/slider29.jpg" class="d-block w-100" alt="Image 29">
    </div>
	<div class="carousel-item">
      <img src="img/slider/slider30.jpg" class="d-block w-100" alt="Image 30">
    </div>
	<div class="carousel-item">
      <img src="img/slider/slider31.jpg" class="d-block w-100" alt="Image 31">
    </div>

	<div class="carousel-item">
      <img src="img/slider/slider32.jpg" class="d-block w-100" alt="Image 32">
    </div>
	<div class="carousel-item">
      <img src="img/slider/slider33.jpg" class="d-block w-100" alt="Image 33">
    </div>
	<div class="carousel-item">
      <img src="img/slider/slider34.jpg" class="d-block w-100" alt="Image 34">
    </div>
	<div class="carousel-item">
      <img src="img/slider/slider35.jpg" class="d-block w-100" alt="Image 35">
    </div>
	<div class="carousel-item">
      <img src="img/slider/slider36.jpg" class="d-block w-100" alt="Image 36">
    </div>
	<div class="carousel-item">
      <img src="img/slider/slider37.jpg" class="d-block w-100" alt="Image 37">
    </div>
	<div class="carousel-item">
      <img src="img/slider/slider38.jpg" class="d-block w-100" alt="Image 38">
    </div>
    <!-- Add more items (up to 50 images) -->
  </div>
</div>


	<!-- Hero section -->
	<div class="hero-section">
		<div class="container-fluid">
			<!-- Masonry Grid -->
			 
			<!--<div id="media-gallery" class="masonry-grid">-->
				<!-- Media items will be dynamically added here -->
			<!--</div>-->
			<div class="masonry">
  <div class="column"><img src="media/A27I2174.jpg" alt="Image 1"></div>
  <div class="column"><img src="media/A27I4415.jpg" alt="Image 2"></div>
  <div class="column"><img src="media/LRM_EXPORT_20171003_230518.jpg" alt="Image 3"></div>
  <div class="column"><img src="media/A27I4542.jpg" alt="Image 4"></div>
  <!-- Add more images below -->
  <div class="column"><img src="media/A27I3887.jpg" alt="Image 5"></div>
  <div class="column"><img src="media/A27I2389 - Copy (2).jpg" alt="Image 6"></div>
  <div class="column"><img src="media/A27I2357 (1) - Copy.jpg" alt="Image 5"></div>
  <div class="column"><img src="media/A27I0621.jpg" alt="Image 6"></div>
  <!-- add more-->
  <div class="column"><img src="media/LRM_EXPORT_139520833449605_20190210_114105437.jpeg" alt="Image 5"></div>
  <div class="column"><img src="media/LRM_EXPORT_463075489476_20181225_224406112.jpeg" alt="Image 6"></div>
  <div class="column"><img src="media/LRM_EXPORT_251983683065153_20190105_000358881.jpeg" alt="Image 5"></div>
  <div class="column"><img src="media/LRM_EXPORT_164377511493341_20190114_183839554.jpeg" alt="Image 6"></div>
  <!-- add more-->
  <div class="column"><img src="media/A27I3114.jpg" alt="Image 5"></div>
  <div class="column"><img src="media/PSX_20201107_235347.jpg" alt="Image 6"></div>
  <div class="column"><img src="media/A27I0110.jpg" alt="Image 5"></div>
  <div class="column"><img src="media/LRM_EXPORT_276904706052361_20190105_183044730.jpeg" alt="Image 6"></div>
</div>
<script>
  // Array of images for each column
  const imageSets = [
    ["media/A27I2174.jpg", "media/PSX_20201107_235347.jpg", "media/A27I1633.jpg", "media/A27I6369.jpg"],
    ["media/A27I4542.jpg", "media/LRM_EXPORT_20170903_173755.jpg", "media/A27I2244.jpg", "media/A27I6587.jpg"],
    ["media/LRM_EXPORT_19820962648368_20190427_230516430.jpeg", "media/LRM_EXPORT_20170916_005146.jpg", "media/A27I1945.jpg", "media/A27I6443.jpg"],
    ["media/A27I4542.jpg", "media/LRM_EXPORT_20170919_213947.jpg", "media/A27I2010.jpg", "media/A27I6405.jpg"],

    ["media/LRM_EXPORT_20170803_093949.jpg", "media/A27I2174.jpg", "media/A27I6369.jpg", "media/A27I1633.jpg"],
    ["media/LRM_EXPORT_20170903_173755.jpg", "media/A27I4542.jpg", "media/A27I6587.jpg", "media/A27I2244.jpg"],
    ["media/LRM_EXPORT_20170916_005146.jpg", "media/LRM_EXPORT_19820962648368_20190427_230516430.jpeg", "media/A27I6443.jpg", "media/A27I1945.jpg"],
    ["media/LRM_EXPORT_20170919_213947.jpg", "media/A27I6405.jpg", "media/A27I2010.jpg"],

    ["media/A27I3114.jpg", "media/LRM_EXPORT_20170803_093949.jpg", "media/A27I0110.jpg", "media/LRM_EXPORT_276904706052361_20190105_183044730.jpeg"],
    ["media/LRM_EXPORT_139520833449605_20190210_114105437.jpeg", "media/LRM_EXPORT_463075489476_20181225_224406112.jpeg", "media/LRM_EXPORT_251983683065153_20190105_000358881.jpeg", "media/LRM_EXPORT_164377511493341_20190114_183839554.jpeg"],
    ["media/A27I3887.jpg", "media/A27I2389 - Copy (2).jpg", "media/A27I2357 (1) - Copy.jpg", "media/A27I0621.jpg"],
    ["media/A27I2056.jpg", "media/A27I2078.jpg", "media/A27I2081.jpg", "media/A27I2852.jpg"],
	
    ["media/A27I6783.jpg", "media/A27I6774.jpg", "media/A27I6860.jpg", "media/A27I7037.jpg"],
    ["media/LRM_EXPORT_20170805_182637.jpg", "media/LRM_EXPORT_20170805_190124.jpg", "media/LRM_EXPORT_20170806_081621.jpg", "media/LRM_EXPORT_20170807_133626.jpg"],
    ["media/A27I0037.jpg", "media/A27I0093 (1).jpg", "media/A27I0176.jpg", "media/A27I0432.jpg"],
    ["media/A27I4441.jpg", "media/A27I4796.jpg", "media/A27I4806.jpg", "media/A27I5134.jpg"],
	
	

	
  ];

  const columns = document.querySelectorAll(".column img");

  let index = 0;
  setInterval(() => {
    index = (index + 1) % imageSets[0].length;
    columns.forEach((img, i) => {
      img.style.opacity = 0;
      setTimeout(() => {
        img.src = imageSets[i][index];
        img.style.opacity = 1;
      }, 300);
    });
  }, 5000); // Change every 3 seconds
</script>
  

  <style>
.masonry {
  column-count: 4;
  column-gap: 15px;
  padding: 10px;
}

.masonry img {
  width: 100%;
  margin-bottom: 15px;
  break-inside: avoid;
  border-radius: 8px;
  display: block;
}
@media (max-width: 1200px) {
  .masonry {
    column-count: 3;
  }
}

@media (max-width: 768px) {
  .masonry {
    column-count: 2;
  }
}

@media (max-width: 480px) {
  .masonry {
    column-count: 1;
  }
}

  </style>
		</div>
		<!--<div class="hero-social-links">
		<a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a>
    <a href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram"></i></a>
    <a href="https://www.twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
    <a href="https://www.youtube.com/@sharadkumarvyas1" target="_blank"><i class="fa fa-youtube"></i></a>
		</div>-->
	</div>
	<!-- Hero section end -->

	<!-- Intro section -->
	<section class="intro-section">
		<div class="intro-warp">
			<div class="container-fluid pattern">
				<div class="row">
					<div class="col-xl-7 col-lg-7 p-0">
						<div class="intro-text">
							<h2>My name is Dr. Sharad Kumar Vyas, Apart from working in legal world, I am trying to inculcate passion for photography.</h2>
							<p>Beauty lies in the eyes of beholder &amp; to behold beauty for eternity, it is needed to capture it and to exhibit in a more beautiful way So this platfrom clicks from all corners of the country can be exhibited more efficiently.For more than last one decade, I am working with camera as a hobbiest. Hope viewers will appreciate the work.</p>
							<a href="<?php echo BASE_URL; ?>frontend/portfolio.php" class="sp-link">Take a look @my portfolio</a>
						</div>
					</div>
					<div class="col-xl-5 col-lg-5 p-0">
    <!-- Sample Card -->
    <div class="e-card playing">
    <div class="image">
        <img id="slideshow" src="img/img1.png" alt="Camera">
    </div>
</div>

<script>
    // Images ka array
    const images = [
        "img/img1.png",
        "img/img2.png",
        "img/img3.jpg",
        "img/img4.jpg",
        "img/img5.jpg",
        "img/img6.jpeg",
        "img/image-7.png",
        "img/image-8.png",
        "img/image-9.png",
      
    ];

    let index = 0; // Start position

    function changeImage() {
        index = (index + 1) % images.length; // Next image index
        document.getElementById("slideshow").src = images[index]; // Image update
    }

    // Har 5 second me image change karega
    setInterval(changeImage, 5000);
</script>



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
