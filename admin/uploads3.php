<?php
include('../config.php'); // Include config for dynamic URLs
include('../includes/db.php');

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = htmlspecialchars($_POST['title'], ENT_QUOTES);
    $description = htmlspecialchars($_POST['description'], ENT_QUOTES);
    $caption = htmlspecialchars($_POST['caption'], ENT_QUOTES);
    $category = htmlspecialchars($_POST['category'], ENT_QUOTES);
    $date_uploaded = $_POST['date_uploaded'] ?? date('Y-m-d H:i:s');
    $video_link = htmlspecialchars($_POST['video_link'], ENT_QUOTES);

    // Thumbnail Image Upload
    $uploadDir = '../uploads/video_thumbnails/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $thumbnailUrl = '';
    if (isset($_FILES['thumbnail']) && $_FILES['thumbnail']['error'] == UPLOAD_ERR_OK) {
        $thumbnailTmp = $_FILES['thumbnail']['tmp_name'];
        $thumbnailName = uniqid() . '-' . basename($_FILES['thumbnail']['name']);
        $thumbnailPath = $uploadDir . $thumbnailName;

        if (move_uploaded_file($thumbnailTmp, $thumbnailPath)) {
            // Generate thumbnail URL dynamically
            $thumbnailUrl = BASE_URL . 'uploads/video_thumbnails/' . $thumbnailName;
        }
    }

    // Insert data into the database
    $query = "INSERT INTO video_portfolio (title, description, caption, date_uploaded, category, thumbnail_url, video_link) 
              VALUES ('$title', '$description', '$caption', '$date_uploaded', '$category', '$thumbnailUrl', '$video_link')";

    if (mysqli_query($db, $query)) {
        echo "Video data saved successfully!";
        header("Location: " . ADMIN_URL . "index.php");
        exit;
    } else {
        echo "Database error: " . mysqli_error($db);
    }
}
?>
