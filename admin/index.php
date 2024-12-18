<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - Upload Media</title>
  
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
  </style>
</head>
<body>

  <div class="admin-container">
    <h1>Upload Media</h1>
    <form action="uploads.php" method="POST" enctype="multipart/form-data">
      <!-- File Input -->
      <div class="mb-3">
        <label for="file" class="form-label">Select File</label>
        <input type="file" class="form-control" id="file" name="files[]" multiple required>
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

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
