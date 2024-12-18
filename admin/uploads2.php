<?php
include('../includes/db.php');

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = htmlspecialchars($_POST['title'], ENT_QUOTES);
    $description = htmlspecialchars($_POST['description'], ENT_QUOTES);
    $caption = htmlspecialchars($_POST['caption'], ENT_QUOTES);
    $category = htmlspecialchars($_POST['category'], ENT_QUOTES);
    $date_uploaded = $_POST['date_uploaded'] ?? date('Y-m-d H:i:s');
    $folder_link = htmlspecialchars($_POST['folder_link'], ENT_QUOTES);

    // Thumbnail Image Upload
    $uploadDir = '../uploads/thumbnails/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $thumbnailUrl = '';
    if (isset($_FILES['thumbnail']) && $_FILES['thumbnail']['error'] == UPLOAD_ERR_OK) {
        $thumbnailTmp = $_FILES['thumbnail']['tmp_name'];
        $thumbnailName = uniqid() . '-' . basename($_FILES['thumbnail']['name']);
        $thumbnailPath = $uploadDir . $thumbnailName;

        if (move_uploaded_file($thumbnailTmp, $thumbnailPath)) {
            // Assuming base URL is localhost/photographer-2-master
            $baseUrl = "http://localhost/photographer-2-master/";
            $thumbnailUrl = $baseUrl . 'uploads/thumbnails/' . $thumbnailName;
        }
    }

    // Insert data into the database
    $query = "INSERT INTO folder_portfolio (title, description, caption, date_uploaded, category, thumbnail_url, folder_link) 
              VALUES ('$title', '$description', '$caption', '$date_uploaded', '$category', '$thumbnailUrl', '$folder_link')";

    if (mysqli_query($db, $query)) {
        echo "Folder data saved successfully!";
        header("Location: /photographer-2-master/admin/index.php");
        exit;
    } else {
        echo "Database error: " . mysqli_error($db);
    }
}
?>
