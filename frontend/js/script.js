let baseUrl = '';
if (window.location.hostname === 'localhost') {
  // For local development
  baseUrl = `${window.location.origin}/photographer-2-master/frontend`;
} else {
  // For production (live server)
  baseUrl = `${window.location.origin}/frontend`; // Use sharadvyasphotography.com/frontend
}

function fetchFolderData() {
  // Dynamically determine the base URL
   // Check if the current environment is production or local development
   let baseUrl = '';
   if (window.location.hostname === 'localhost') {
     // For local development
     baseUrl = `${window.location.origin}/photographer-2-master/frontend`;
   } else {
     // For production (live server)
     baseUrl = `${window.location.origin}/frontend`; // Use sharadvyasphotography.com/frontend
   }
  // Send a request to the PHP script to get the folder data
  fetch(`${baseUrl}/get_media_folder.php`)
      .then(response => response.json())
      .then(folderData => renderFolderPortfolio(folderData))
      .catch(error => console.error('Error fetching folder data:', error));
}

function renderFolderPortfolio(folderData) {
  const gallery = document.getElementById('folder-gallery');
  gallery.classList.add('masonry-grid'); // Add Masonry grid class (if needed)

  const fragment = document.createDocumentFragment(); // Use fragment for performance

  // Sort the folders by date in descending order (most recent first)
  const sortedFolders = folderData
      .sort((a, b) => new Date(b.date_uploaded) - new Date(a.date_uploaded));

  sortedFolders.forEach(folder => {
      // Create a new div for each folder item
      const folderElement = document.createElement('div');
      folderElement.classList.add('mix', 'grid-item'); // Add classes for grid item and mix

      // Create the grid portfolio div
      const gridPortfolio = document.createElement('div');
      gridPortfolio.classList.add('grid-portfolio');

      // Add the thumbnail image
      const thumbnail = document.createElement('img');
      thumbnail.src = folder.thumbnail_url; // Set the thumbnail URL
      thumbnail.alt = folder.title; // Set the alt text
      thumbnail.classList.add('portfolio-img');

      // Create and add the folder title
      const title = document.createElement('h6');
      title.textContent = folder.title;

      // Create and add the description (date uploaded)
      const description = document.createElement('p');
      description.textContent = folder.description

      

      // Append the thumbnail, title, and description to the grid portfolio
      gridPortfolio.appendChild(thumbnail);
      gridPortfolio.appendChild(title);
      gridPortfolio.appendChild(description);

   // Add a click event listener to redirect to the folder's link
  // Add a click event listener to redirect to the folder's link
  folderElement.addEventListener('click', () => {
    let folderLink = folder.folder_link;

    // Check if the folder link starts with 'http' or 'https'
    if (!(folderLink.startsWith('http://') || folderLink.startsWith('https://'))) {
        folderLink = `http://${folderLink}`; // If not, prepend 'http://'
    }

    // Redirect to the folder link
    window.location.href = folderLink;
});

      // Append the grid portfolio to the folder element
      folderElement.appendChild(gridPortfolio);

      // Append the folder element to the fragment
      fragment.appendChild(folderElement);
  });

  // Append the fragment to the gallery
  gallery.appendChild(fragment);

  // Optional: Recalculate Masonry layout after adding new items
  initializeMasonry();
}

// Call the function to fetch and render the folder data when the page is loaded
fetchFolderData();

  

async function fetchMedia() {
  try {
      // Check if the current environment is production or local development
      let baseUrl = '';
      if (window.location.hostname === 'localhost') {
        // For local development
        baseUrl = `${window.location.origin}/photographer-2-master/frontend`;
      } else {
        // For production (live server)
        baseUrl = `${window.location.origin}/frontend`; // Use sharadvyasphotography.com/frontend
      }

    console.log('fetchMedia function is called'); 
    const response = await fetch(`${baseUrl}/get_media.php`);
    const data = await response.json();
    console.log('Fetched Media:', data); // Debugging line to check fetched data

    // Pass the data to the appropriate page-specific render function
    if (window.location.pathname.includes("portfolio")) {
      renderCategoryButtons(data);  // Create category buttons dynamically
      renderPortfolioMedia(data, 'all');   // Render all media initially
    } else if (window.location.pathname.includes("index")) {
      renderHomePageMedia(data);    // Render home page media
      renderCarouselPhotos(data);
    } else {
      console.log("No render function for this page");
    }
  } catch (error) {
    console.error('Error fetching media:', error);
  }
}

function renderCategoryButtons(mediaData) {
  const categoryButtonsContainer = document.getElementById('category-buttons');
  if (!categoryButtonsContainer) {
    console.error('Category buttons container not found!');
    return;
  }

  // Get unique categories from the media data
  const categories = [...new Set(mediaData.map(item => item.category))];
  console.log('Categories:', categories); // Debugging line to check categories

  // Generate and append the categories as static list items
  categories.forEach(category => {
    const categoryButton = document.createElement('li');
    categoryButton.classList.add('control');
    categoryButton.textContent = category;
    // Remove the event listener and filter logic as we don't need it
    categoryButtonsContainer.appendChild(categoryButton);
  });
}


// function renderPortfolioMedia(mediaData, filterCategory) {
//   const portfolioGallery = document.getElementById('portfolio-gallery');
//   if (!portfolioGallery) {
//     console.error('Portfolio gallery container not found!');
//     return;
//   }

//   portfolioGallery.innerHTML = '';  // Clear existing content
//   portfolioGallery.classList.add('masonry-grid');

//   const filteredData = filterCategory === 'all' 
//     ? mediaData 
//     : mediaData.filter(item => item.category === filterCategory);

//   filteredData.forEach(item => {
//     const mediaElement = document.createElement('div');
//     mediaElement.classList.add('portfolio-item', 'masonry-item');

//     mediaElement.innerHTML = item.media_type === 'photo'
//       ? `<a href="${item.media_url}" target="_blank"><img src="${item.media_url}" class="img-fluid masonry-img" /></a>`
//       : `<a href="${item.media_url}" target="_blank"><video controls><source src="${item.media_url}" type="video/mp4"></video></a>`;

//     portfolioGallery.appendChild(mediaElement);
//   });

//   // Reinitialize Masonry after the DOM update
//   imagesLoaded(portfolioGallery, function() {
//     initializeMasonry();
//   });
// }


function renderPortfolioMedia(mediaData) {
    // Determine base URL based on the environment
    let baseUrl = '';
    if (window.location.hostname === 'localhost') {
      baseUrl = `${window.location.origin}/photographer-2-master/frontend`;
    } else {
      baseUrl = `${window.location.origin}`; // For live server
    }
  const gallery = document.getElementById('portfolio-gallery');
  gallery.classList.add('masonry-grid'); // Add Masonry grid class

  const fragment = document.createDocumentFragment(); // Use fragment for performance

  mediaData.forEach(item => {
    const mediaElement = document.createElement('div');
    mediaElement.classList.add('portfolio-item', 'masonry-item');

    // Create a link for media items (this will trigger the modal)
    const mediaLink = document.createElement('a');
    mediaLink.classList.add('masonry-link');
    mediaLink.setAttribute('data-bs-toggle', 'modal'); // Add Bootstrap modal trigger
    mediaLink.setAttribute('data-bs-target', '#imageModal'); // Link to the modal
    mediaLink.setAttribute('data-title', item.title);  // Store title in a custom attribute
    mediaLink.setAttribute('data-caption', item.caption);  // Store caption
    mediaLink.setAttribute('data-description', item.description);  // Store description
    mediaLink.setAttribute('data-category', item.category);  // Store category
    mediaLink.setAttribute('data-date', item.date);  // Store date
    mediaLink.setAttribute('data-media-url', item.media_url);  // Store media URL for image/video

    // Handle photo media type
    if (item.media_type === 'photo') {
      mediaLink.innerHTML = ` 
        <img src="${item.media_url}" alt="${item.title}" class="masonry-img" />
     `;
    }

    // Handle video media type
    if (item.media_type === 'video') {
      mediaLink.innerHTML = `
        <video autoplay muted loop class="masonry-img">
          <source src="${item.media_url}" type="video/mp4">
         </video>
      `;
    }

    // Append the mediaLink to the mediaElement
    mediaElement.appendChild(mediaLink);

    // Append the mediaElement to the fragment for performance optimization
    fragment.appendChild(mediaElement);
  });

  // Append the fragment to the gallery container
  gallery.appendChild(fragment);

  // Recalculate Masonry layout after adding new items
  initializeMasonry();

  // Optional: Lazy load images or implement any other feature
  // lazyLoadImages();
  // Event listener to fill the modal dynamically when an image or video is clicked
document.querySelectorAll('.masonry-link').forEach(link => {
  link.addEventListener('click', (event) => {
    // Fetch the data from the clicked media item
    const title = event.currentTarget.getAttribute('data-title');
    const caption = event.currentTarget.getAttribute('data-caption');
    const description = event.currentTarget.getAttribute('data-description');
    const category = event.currentTarget.getAttribute('data-category');
    const date = event.currentTarget.getAttribute('data-date');
    const mediaUrl = event.currentTarget.getAttribute('data-media-url');

    // Log the fetched data to verify it's correct
    console.log({ title, caption, description, category, date, mediaUrl });

    // Populate the modal
    document.getElementById('imageModalLabel').textContent = title;
    document.getElementById('modalImage').src = mediaUrl;
    document.getElementById('modalDescription').textContent = description;
    document.getElementById('modalCategory').textContent = category;
    document.getElementById('modalDate').textContent = date;
    document.getElementById('modalCaption').textContent = caption;
  });
});
}

// Fix Masonry layout on window resize
window.addEventListener('resize', () => {
  if (masonryInstance) {
    masonryInstance.layout(); // Force Masonry to re-layout
  }
});





function renderHomePageMedia(mediaData) {
  const gallery = document.getElementById('media-gallery');
  gallery.classList.add('masonry-grid'); // Add Masonry grid class

  const fragment = document.createDocumentFragment(); // Use fragment for performance

    // Sort mediaData by date in descending order (most recent first) and take the first 25 items
    const recentMedia = mediaData
    .sort((a, b) => new Date(b.date) - new Date(a.date)) // Sort by date descending
    .slice(0, 25); // Take only the first 25 items

  recentMedia.forEach(item => {
    const mediaElement = document.createElement('div');
    mediaElement.classList.add('media-item', 'masonry-item');

    // Create a link that redirects to portfolio.html when clicked
    const mediaLink = document.createElement('a');
    mediaLink.href = '/photographer-2-master/frontend/portfolio.html';  // Redirect to portfolio page
    mediaLink.classList.add('masonry-link');

    // Handle photo media type
    if (item.media_type === 'photo') {
      mediaLink.innerHTML = `
        <img src="${item.media_url}" alt="${item.title}" class="masonry-img" />
      `;
    }

    // Handle video media type
    if (item.media_type === 'video') {
      mediaLink.innerHTML = `
        <video autoplay muted loop class="img-fluid masonry-img">
          <source src="${item.media_url}" type="video/mp4">
        </video>
      `;
    }

    // Append mediaLink to the mediaElement
    mediaElement.appendChild(mediaLink);

    // Append the mediaElement to the fragment for performance optimization
    fragment.appendChild(mediaElement);
  });

  // Append the fragment to the gallery
  gallery.appendChild(fragment);

  // Recalculate Masonry layout after adding new items
  initializeMasonry();

  // Lazy load images (optional, if you plan to implement it later)
  // lazyLoadImages();
}

// Carousel
function renderCarouselPhotos(photoData) {
  // Select the carousel inner container
  const carouselInner = document.querySelector('#carouselExample .carousel-inner');
  
  // Clear existing carousel items
  carouselInner.innerHTML = '';

   // Filter only photo media types
   const photos = photoData.filter(photo => photo.media_type === 'photo');
  
   if (photos.length === 0) {
     console.error("No photos available for the carousel.");
     return;
   }

  // Shuffle the photoData to ensure randomness
  const shuffledPhotos = photos.sort(() => 0.5 - Math.random());

  // Get only 10 random photos
  const selectedPhotos = shuffledPhotos.slice(0, 10);

  // Loop through the selected photos and create carousel items
  selectedPhotos.forEach((photo, index) => {
    const carouselItem = document.createElement('div');
    carouselItem.classList.add('carousel-item');
    if (index === 0) carouselItem.classList.add('active'); // Make the first item active

    carouselItem.innerHTML = `
      <img src="${photo.media_url}" class="d-block w-100 carousel-image" alt="${photo.title || 'Photo'}">
    `;

    // Append the item to the carousel-inner container
    carouselInner.appendChild(carouselItem);
  });

  console.log('Carousel updated with random photos.');
}




let masonryInstance; // Store Masonry instance globally

function initializeMasonry() {
  const grid = document.querySelector('.masonry-grid');

  if (grid) {
    // Initialize Masonry only once
    if (!masonryInstance) {
      imagesLoaded(grid, function() {
        masonryInstance = new Masonry(grid, {
          itemSelector: '.masonry-item',
          columnWidth: '.masonry-item',
          percentPosition: true
        });
      });
    } else {
      // Reload Masonry layout
      masonryInstance.reloadItems();
      masonryInstance.layout();
    }
  } else {
    console.error("Masonry grid element not found.");
  }
  document.querySelectorAll('.tab-link').forEach(tab => {
    tab.addEventListener('click', () => {
      // Reinitialize Masonry and other layout
      initializeMasonry();
    });
  });
  
}
function initializeMixItUp() {
  const container = document.querySelector('.portfolio-gallery');

  if (container) {
    // Initialize MixItUp (for filtering)
    const mixer = mixitup(container, {
      selectors: {
        target: '.portfolio-item'
      },
      load: {
        filter: 'all' // Default filter
      },
      callbacks: {
        onMixEnd: function () {
          console.log('MixItUp filter completed. Recalculating Masonry layout...');
          if (masonryInstance) {
            masonryInstance.layout(); // Recalculate Masonry layout
          }
        }
      }
    });
  }
}




fetchMedia();


