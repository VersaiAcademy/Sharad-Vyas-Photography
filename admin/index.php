<?php
// Include the config file for BASE_URL and ADMIN_URL
include_once '../config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - Upload Media</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Custom CSS */
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
    .navbar-custom {
      background-color: rgb(164, 120, 218);
    }
    .navbar-custom .nav-link {
      color: #fff !important;
    }
    .navbar-custom .nav-link:hover {
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
            <a class="nav-link" href="<?php echo ADMIN_URL; ?>index.php">Upload Media</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ADMIN_URL; ?>upload_folder.php">Upload Folder</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="admin-container">
    <h1>Upload Media</h1>
    <form id="uploadForm" action="<?php echo ADMIN_URL; ?>uploads.php" method="POST" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="file" class="form-label">Select File</label>
        <input type="file" class="form-control" id="file" name="files[]" multiple required>
      </div>
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" required>
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter description"></textarea>
      </div>
      <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select class="form-select" id="category" name="category" onchange="toggleOtherCategoryInput()">
          <option value="Other" selected>Other</option>
        </select>
        <div id="newCategoryInput" style="display: none;">
          <label for="newCategory" class="form-label">Enter New Category</label>
          <input type="text" class="form-control" id="newCategory" name="newCategory" placeholder="Type your new category here">
        </div>
      </div>
      <button type="submit" class="btn btn-primary btn-upload">Upload Media</button>
    </form>
  </div>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const categorySelect = document.getElementById('category');
    const newCategoryInput = document.getElementById('newCategoryInput');
    const newCategoryValue = document.getElementById('newCategory');

    fetch('<?php echo ADMIN_URL; ?>get_data.php')
  .then(response => response.json())
  .then(data => {
    // Extract unique categories from the response
    const uniqueCategories = new Set();
    data.forEach(item => {
      if (item.category) {
        uniqueCategories.add(item.category); // Add catesgory to the Set
      }
    });

    // Append each unique category to the dropdown
    uniqueCategories.forEach(category => {
      const option = document.createElement('option');
      option.value = category;
      option.textContent = category;
      categorySelect.appendChild(option);
    });
  })
  .catch(error => {
    console.error('Error fetching categories:', error);
  });

    // Toggle input for "Other" category
    function toggleOtherCategoryInput() {
      newCategoryInput.style.display = categorySelect.value === 'Other' ? 'block' : 'none';
    }

    document.getElementById('uploadForm').addEventListener('submit', function(e) {
      e.preventDefault();
      const formData = new FormData(this);

      if (categorySelect.value === 'Other' && !newCategoryValue.value.trim()) {
        alert('Please enter a new category name!');
        return;
      }

      fetch('<?php echo ADMIN_URL; ?>uploads.php', {
        method: 'POST',
        body: formData
      })
      .then(response => response.ok ? alert('Success') : alert('Failed'))
      .catch(error => console.error('Error:', error));
    });
  </script>
</body>
</html>
