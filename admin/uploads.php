<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include('../includes/db.php');

// Check database connection
if (!$db) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Handle multiple file uploads
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['files'])) {
    $files = $_FILES['files'];
    $title = htmlspecialchars($_POST['title'], ENT_QUOTES);
    $description = htmlspecialchars($_POST['description'], ENT_QUOTES);
    $caption = htmlspecialchars($_POST['caption'], ENT_QUOTES);
    $category = htmlspecialchars($_POST['category'], ENT_QUOTES);
    $date_uploaded = $_POST['date_uploaded'] ?? date('Y-m-d H:i:s');

    // Directory for file uploads
    $uploadDir = '../uploads/';

    // Create the upload directory if it doesn't exist
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    if (!is_writable($uploadDir)) {
        die("Upload directory is not writable.");
    }

    $allowedMimeTypes = ['image/jpeg', 'image/png', 'video/mp4', 'video/webm'];

    // Determine the base URL based on the environment
    if ($_SERVER['HTTP_HOST'] === 'localhost') {
        // For local development
        $baseUrl = "http://localhost/photographer-2-master/";
    } else {
        // For production (live server)
        $baseUrl = "https://sharadvyasphotography.com/";
    }

    // Loop through each uploaded file
    for ($i = 0; $i < count($files['name']); $i++) {
        $tmpFilePath = $files['tmp_name'][$i];
        $fileError = $files['error'][$i];
        $fileName = $files['name'][$i];

        // Validate file
        if ($fileError !== UPLOAD_ERR_OK || !is_uploaded_file($tmpFilePath)) {
            echo "File upload failed for $fileName. Error code: $fileError<br>";
            continue; // Skip to the next file
        }

        // Validate MIME type using finfo
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $fileMimeType = finfo_file($finfo, $tmpFilePath);
        finfo_close($finfo);

        if (!in_array($fileMimeType, $allowedMimeTypes)) {
            echo "Invalid file type for $fileName. Only JPEG, PNG, MP4, and WebM are allowed.<br>";
            continue; // Skip to the next file
        }

        // Generate a unique file name and move the file
        $uniqueFileName = uniqid() . '-' . basename($fileName);
        $filePath = $uploadDir . $uniqueFileName;

        if (move_uploaded_file($tmpFilePath, $filePath)) {
            // Generate media URL
            $mediaUrl = $baseUrl . 'uploads/' . $uniqueFileName;

            // Media type detection
            $mediaType = (strpos($fileMimeType, 'image') !== false) ? 'photo' : 'video';

            // Insert metadata into the database
            $query = "INSERT INTO media (title, description, caption, date_uploaded, category, media_url, media_type, thumbnail_url)
                      VALUES ('$title', '$description', '$caption', '$date_uploaded', '$category', '$mediaUrl', '$mediaType', '')";

            if (mysqli_query($db, $query)) {
                echo "File '$fileName' uploaded and saved successfully!<br>";
            } else {
                echo "Error saving data for '$fileName' to the database: " . mysqli_error($db) . "<br>";
            }
        } else {
            echo "Failed to move the uploaded file: $fileName<br>";
        }
    }

    // Redirect back to index.php
    header("Location: /photographer-2-master/admin/index.php");
    exit;
} else {
    echo "No files uploaded.";
}
?>
