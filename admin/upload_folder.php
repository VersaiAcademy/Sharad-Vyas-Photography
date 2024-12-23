<?php
session_start();
include_once '../config.php';

// Redirect to login if not authenticated
if (empty($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - Upload Folder Link</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <style>
    body {
      background-color: #f8f9fa;
    }
    .admin-container {
      max-width: 600px;
      margin: 50px auto;
      background: #ffffff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .admin-container h1 {
      margin-bottom: 20px;
      text-align: center;
      font-size: 28px;
      font-weight: 700;
      color: #333333;
    }
    .form-control, .form-select {
      margin-bottom: 15px;
    }
    .btn-upload {
      width: 100%;
      font-weight: bold;
      background-color: #007bff;
      border: none;
    }
    .btn-upload:hover {
      background-color: #0056b3;
    }
    .navbar-custom {
      background-color:rgb(164, 120, 218);
    }
    .navbar-custom .navbar-nav .nav-link {
      color: #ffffff !important;
    }
    .navbar-custom .navbar-nav .nav-link:hover {
      color: #d1d1d1 !important;
    }
  </style>
</head>
<body>
  
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="#">Admin Panel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Upload Media</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="upload_folder.php">Upload Folder</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ADMIN_URL; ?>upload_video.php">Upload Video</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<div class="admin-container">
    <h1>Upload Media Folder Link</h1>
    <form id="uploadForm" action="uploads2.php" method="POST" enctype="multipart/form-data">
        <!-- Folder Link Input -->
        <div class="mb-3">
            <label for="folder_link" class="form-label">Folder Link</label>
            <input type="text" class="form-control" id="folder_link" name="folder_link" placeholder="Enter folder link" required>
        </div>
        
        <!-- Thumbnail Upload -->
        <div class="mb-3">
            <label for="thumbnail" class="form-label">Thumbnail Image</label>
            <input type="file" class="form-control" id="thumbnail" name="thumbnail" accept="image/*" required>
        </div>

        <!-- Title Input -->
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" required>
        </div>

        <!-- Description -->
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter description"></textarea>
        </div>

        <!-- Caption -->
        <div class="mb-3">
            <label for="caption" class="form-label">Caption</label>
            <input type="text" class="form-control" id="caption" name="caption" placeholder="Enter caption">
        </div>

        <!-- Date Uploaded -->
        <div class="mb-3">
            <label for="date_uploaded" class="form-label">Date Uploaded</label>
            <input type="date" class="form-control" id="date_uploaded" name="date_uploaded">
        </div>

        <!-- Category Selection -->
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-select" id="category" name="category">
                <option value="Nature">Nature</option>
                <option value="Architecture">Architecture</option>
                <option value="Travel">Travel</option>
                <option value="Food">Food</option>
                <option value="Other">Other</option>
            </select>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary btn-upload">Upload Media</button>
    </form>
</div>


  <!-- Success Modal -->
  <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="successModalLabel">Success</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Media uploaded successfully!
        </div>
      </div>
    </div>
  </div>

  <!-- Failure Modal -->
  <div class="modal fade" id="failureModal" tabindex="-1" aria-labelledby="failureModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="failureModalLabel">Error</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Failed to upload media. Please try again.
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.getElementById('uploadForm').addEventListener('submit', function (e) {
      e.preventDefault();

      const formData = new FormData(this);
      fetch('uploads2.php', {
        method: 'POST',
        body: formData
      })
      .then(response => {
        if (response.ok) {
          new bootstrap.Modal(document.getElementById('successModal')).show();
        } else {
          throw new Error('Upload failed');
        }
      })
      .catch(error => {
        console.error(error);
        new bootstrap.Modal(document.getElementById('failureModal')).show();
      });
    });
  </script>
</body>
</html>
