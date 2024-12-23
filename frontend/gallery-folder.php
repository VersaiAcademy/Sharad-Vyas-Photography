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
	 <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS (includes Popper.js for modal functionality) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="./css/style.css"/>


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

	<!-- Portfolio section  -->
	<div>
		<!-- Portfolio Filter Controls -->
		<ul id="category-buttons" class="portfolio-filter controls text-center">
			<!-- Category buttons will be dynamically added here -->
		  </ul>

		  <!-- Folder Section -->
		  <div class="portfolio-grid portfolio-gallery nature" id="folder-gallery">
		 <!-- Grid sizer for Masonry layout -->
			<!-- Dynamic folder items will be appended here -->
		</div>

		  
	  </div>
	  
	<!-- Portfolio section end  -->
	


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

	 <!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="imageModalLabel">Image Title</h5>
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
		  <!-- Image and details -->
		  <div class="row">
			<div class="col-md-8">
			  <img src="" alt="" class="img-fluid" id="modalImage" />
			</div>
			<div class="col-md-4">
			  <h6>Description:</h6>
			  <p id="modalDescription"></p>
			  <p><strong>Category:</strong> <span id="modalCategory"></span></p>
			  <p><strong>Date:</strong> <span id="modalDate"></span></p>
			  <p><strong>Caption:</strong> <span id="modalCaption"></span></p>
			</div>
		  </div>
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
		</div>
	  </div>
	</div>
  </div>
  
  

	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/instafeed.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="https://unpkg.com/imagesloaded@4.1.4/imagesloaded.pkgd.min.js"></script>
	<script src="js/script.js"></script>
	<script>
		document.querySelectorAll('.tab-link').forEach(tab => {
  tab.addEventListener('click', () => {
    renderPortfolioMedia(mediaData, 'new-filter'); // Change to new category
    setTimeout(() => {
      masonryInstance.reloadItems();
      masonryInstance.layout(); // Force Masonry to recalculate layout
    }, 200); // Small delay ensures DOM changes are applied
  });
});

	</script>
	<script>
		window.addEventListener('resize', () => {
  if (typeof masonryInstance !== 'undefined') {
    masonryInstance.layout(); // Recalculate the layout
  }
});
	</script>
	</body>
</html>
