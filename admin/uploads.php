<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include('../includes/db.php');

// Check database connection
if (!$db) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Handle file upload
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['file'])) {
    $file = $_FILES['file'];
    $title = htmlspecialchars($_POST['title'], ENT_QUOTES);
    $description = htmlspecialchars($_POST['description'], ENT_QUOTES);
    $caption = htmlspecialchars($_POST['caption'], ENT_QUOTES);
    $category = htmlspecialchars($_POST['category'], ENT_QUOTES);
    $date_uploaded = $_POST['date_uploaded'] ?? date('Y-m-d H:i:s');

    $uploadDir = '../uploads/';

    // Check if upload directory exists
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }
    if (!is_writable($uploadDir)) {
        die("Upload directory is not writable.");
    }

    // Validate file type (allow image and video only)
    $allowedTypes = ['image/jpeg', 'image/png', 'video/mp4', 'video/webm'];
    if (!in_array($file['type'], $allowedTypes)) {
        die("Invalid file type. Only images and videos are allowed.");
    }

    // Check for upload errors
    if ($file['error'] !== 0) {
        die("Error uploading the file. Error Code: " . $file['error']);
    }

    // Generate a unique file name and move the file
    $fileName = uniqid() . '-' . basename($file['name']);
    $filePath = $uploadDir . $fileName;

    if (move_uploaded_file($file['tmp_name'], $filePath)) {
        // Determine media type
        $mediaType = (strpos($file['type'], 'image') !== false) ? 'photo' : 'video';
        $thumbnailUrl = ''; // Optionally, generate thumbnail for video files

        // Insert metadata into the database
        $query = "INSERT INTO media (title, description, caption, date_uploaded, category, media_url, media_type, thumbnail_url)
                  VALUES ('$title', '$description', '$caption', '$date_uploaded', '$category', '$filePath', '$mediaType', '$thumbnailUrl')";

        if (mysqli_query($db, $query)) {
            echo "File uploaded and saved successfully!";
        } else {
            echo "Error saving data to the database: " . mysqli_error($db);
        }
    } else {
        die("Failed to move the uploaded file.");
    }

    // Redirect back to index.php
    header("Location: /photographer-2-master/admin/index.php");
    exit;
} else {
    echo "No file uploaded.";
}
?>
