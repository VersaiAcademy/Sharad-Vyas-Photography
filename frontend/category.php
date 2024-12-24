<?php
include('../includes/db.php');

// Determine base URL based on the environment
if ($_SERVER['HTTP_HOST'] === 'localhost') {
    // For local development
    $baseUrl = "http://localhost/photographer-2-master/uploads/";
} else {
    // For production (live server)
    $baseUrl = "https://sharadvyasphotography.com/uploads/";
}

$category = isset($_GET['category']) ? htmlspecialchars($_GET['category']) : null;
$isAjax = isset($_GET['ajax']) && $_GET['ajax'] === 'true';
$categoryHeading = $category ? ucfirst(htmlspecialchars($category)) : "Gallery";

// Check if category exists
if (!$category) {
    if ($isAjax) {
        header('Content-Type: application/json');
        echo json_encode(['error' => 'No category specified!']);
        exit;
    }
    $error = "No category specified!";
} else {
    // Fetch data from the database
    $sql = "SELECT * FROM media WHERE category = ?";
    $stmt = $db->prepare($sql); // Use $db here
    $stmt->bind_param("s", $category);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if any records exist
    if ($result->num_rows === 0) {
        if ($isAjax) {
            header('Content-Type: application/json');
            echo json_encode(['error' => "No media found for category: $category"]);
            exit;
        }
        $error = "No media found for category: " . htmlspecialchars($category);
    } else {
        $mediaArray = [];
        while ($row = $result->fetch_assoc()) {
            if (strpos($row['media_url'], 'http') !== 0) {
                $row['media_url'] = $baseUrl . $row['media_url'];
            }
            $mediaArray[] = $row;
        }
        if ($isAjax) {
            header('Content-Type: application/json');
            echo json_encode($mediaArray);
            exit;
        }
    }
}
?>




<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Sharad Vyas Photography</title>
    <meta charset="UTF-8">
    <meta name="description" content="Photographer html template">
    <meta name="keywords" content="photographer, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link href="./img/favicon.ico" rel="shortcut icon" />

    <link href="https://fonts.googleapis.com/css2?family=Cardo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/slicknav.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />

    <!-- Main Stylesheets -->
    <link rel="stylesheet" href="css/style.css" />

    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
    <style>
        .thumbnail-container {
            width: 100%;
            height: 100%;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .thumbnail-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .thumbnail-container:hover .thumbnail-img {
            transform: scale(1.05);
        }

        .media-info {
            padding: 16px;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.6));
            border-radius: 0 0 8px 8px;
            color: #f1f1f1;
            position: absolute;
            bottom: 20px;
            width: 100%;
            box-sizing: border-box;
            opacity: 0.6;
            transition: opacity 0.3s ease;
        }

        .media-info:hover {
            opacity: 1;
        }

        .media-title {
            font-size: 18px;
            font-weight: bold;
            margin: 0 0 4px;
            color: #ffffff;
        }

        .media-description,
        .media-date {
            font-size: 14px;
            margin: 0;
            color: #dcdcdc;
        }

        .album-folder {
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
        <a href="<?php echo BASE_URL; ?>index.php" class="site-logo">
            <img src="<?php echo BASE_URL; ?>img/vyasjilogonew.png" alt="logo">
        </a>
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

    <!-- headiing section -->
    <section class="hero-heading">
    <div class="container text-center py-5">
    <h3 class="display-4 text-uppercase font-weight-bold" style="font-family: 'Cardo', serif;">
  Explore "<?php echo $categoryHeading; ?>"
</h3>


</div>
</section>

    <!-- Hero section end -->

    <!-- Masonry Gallery -->
    <div class="hero-section">
    <div class="container-fluid">
        <div id="masonry-gallery" class="masonry-grid">
            <?php foreach ($mediaArray as $media): ?>
                <div class="masonry-item album-folder">
                    <a href="#" class="masonry-link" data-bs-toggle="modal" data-bs-target="#imageModal" data-title=" <?php echo htmlspecialchars($media['title']); ?>" data-description="<?php echo htmlspecialchars($media['description']); ?>" data-img-url="<?php echo htmlspecialchars($media['media_url']); ?>" data-img-date="<?php echo date('jS F Y', strtotime($media['date_uploaded'])); ?>" data-img-caption="<?php echo htmlspecialchars($media['caption']); ?>"
                    >
                        <div class="thumbnail-container">
                            <img src="<?php echo htmlspecialchars($media['media_url']); ?>" alt="<?php echo htmlspecialchars($media['title']); ?>" class="img-fluid thumbnail-img">
                        </div>
                    </a>
                    <div class="media-info">
                        <h5 class="media-title"><?php echo htmlspecialchars($media['title']); ?></h5>
                        <p class="media-description"><?php echo htmlspecialchars($media['description']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- Bootstrap Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-white shadow-xl rounded-lg">
            <div class="modal-header border-b-2 border-gray-300 p-4">
                <h5 class="modal-title text-xl font-semibold text-gray-800" id="imageModalLabel">Image Title</h5></div>
            <div class="modal-body p-4">
                <!-- Image and details -->
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="flex justify-center items-center">
                        <img id="modalImage" src="" alt="" class="img-fluid max-w-full rounded-lg shadow-lg" />
                    </div>
                    <div class="space-y-4">
                        <h6 class="text-lg font-medium text-gray-800">Description:</h6>
                        <p id="modalDescription" class="text-gray-600"></p>
                        <p><strong class="font-semibold text-gray-700">Date:</strong> <span id="modalDate" class="text-gray-600"></span></p>
                        <p><strong class="font-semibold text-gray-700">Caption:</strong> <span id="modalCaption" class="text-gray-600"></span></p>
                    </div>
                </div>
            </div>
            <div class="modal-footer p-4">
                <button type="button" class="btn btn-secondary px-4 py-2 bg-gray-600 text-white rounded-md hover:bg-gray-700" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



    <!-- Masonry Gallery End -->

    <!-- Footer section -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="footer-social-links">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-md-6 text-end">
                    <p>&copy; <?php echo date('Y'); ?> Sharad Vyas Photography. Designed by <a href="https://versai.com">Versai Technology</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer section end -->

    <!-- Search Modal -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search Modal End -->

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/imagesloaded@4.1.4/imagesloaded.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js"></script>
    <script src="js/script.js"></script>
    <script>
    // JavaScript for Bootstrap Modal
    document.addEventListener("DOMContentLoaded", () => {
        const imageModal = document.getElementById("imageModal");
        const modalTitle = document.getElementById("imageModalLabel");
        const modalImage = document.getElementById("modalImage");
        const modalDescription = document.getElementById("modalDescription");
        const modalDate = document.getElementById("modalDate");
        const modalCaption = document.getElementById("modalCaption");

        imageModal.addEventListener("show.bs.modal", function (event) {
            const link = event.relatedTarget; // Link that triggered the modal
            const title = link.getAttribute("data-title");
            const description = link.getAttribute("data-description");
            const imgUrl = link.getAttribute("data-img-url");
            const date = link.getAttribute("data-img-date");
            const caption = link.getAttribute("data-img-caption");

            modalTitle.textContent = title;
            modalImage.src = imgUrl;
            modalDescription.textContent = description;
            modalDate.textContent= date;
            modalCaption.textContent= caption;
        });
    });
</script>
    <script>
  document.addEventListener("DOMContentLoaded", () => {
    const grid = document.querySelector('.masonry-grid');
    
    if (grid) {
      imagesLoaded(grid, function() {
        const masonryInstance = new Masonry(grid, {
          itemSelector: '.masonry-item',
          columnWidth: '.masonry-item',
          percentPosition: true
        });
        console.log("Masonry grid initialized successfully on category page.");
      });
    } else {
      console.error("Masonry grid element not found on category page.");
    }
  });
</script>

</body>

</html>