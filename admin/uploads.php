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

    // Directory for file uploads
    $uploadDir = '../uploads/';

    // Check if upload directory exists
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }
    if (!is_writable($uploadDir)) {
        die("Upload directory is not writable.");
    }

    if (!isset($_FILES['file']) || $_FILES['file']['error'] !== UPLOAD_ERR_OK) {
        die("File upload failed. Error code: " . ($_FILES['file']['error'] ?? 'Unknown'));
    }
    
    // Get the temporary file path
    $tmpFilePath = $_FILES['file']['tmp_name'];
    
    if (!is_uploaded_file($tmpFilePath)) {
        die("Invalid file upload. Please try again.");
    }
    
    // Validate file type using finfo
    $allowedMimeTypes = ['image/jpeg', 'image/png', 'video/mp4', 'video/webm'];
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $fileMimeType = finfo_file($finfo, $tmpFilePath);
    finfo_close($finfo);
    
    // Check MIME type
    if (!in_array($fileMimeType, $allowedMimeTypes)) {
        die("Invalid file type. Only JPEG, PNG, MP4, and WebM are allowed. Detected type: $fileMimeType");
    }

    // Check for upload errors
    if ($file['error'] !== 0) {
        die("Error uploading the file. Error Code: " . $file['error']);
    }

    // Generate a unique file name and move the file
    $fileName = uniqid() . '-' . basename($file['name']); // Create unique file name
    $filePath = $uploadDir . $fileName; // Full path to upload directory
    
    if (move_uploaded_file($file['tmp_name'], $filePath)) {
        // Generate correct media URL
        $baseUrl = "http://localhost/photographer-2-master/";
        $mediaUrl = $baseUrl . 'uploads/' . $fileName;
    
        // Media type detection
        $mediaType = (strpos($fileMimeType, 'image') !== false) ? 'photo' : 'video';
    
        // Insert into the database
        $query = "INSERT INTO media (title, description, caption, date_uploaded, category, media_url, media_type, thumbnail_url)
                  VALUES ('$title', '$description', '$caption', '$date_uploaded', '$category', '$mediaUrl', '$mediaType', '')";
    
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
