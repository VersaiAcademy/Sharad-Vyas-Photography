// async function fetchMedia() {
//     try {
//       const response = await fetch('get_media.php');
//       const data = await response.json();
  
//       const gallery = document.getElementById('media-gallery');
//       data.forEach(item => {
//         const mediaElement = document.createElement('div');
//         mediaElement.classList.add('media-item');
  
//         if (item.media_type === 'photo') {
//           mediaElement.innerHTML = `<img src="${item.media_url}" alt="${item.title}" />`;
//         } else if (item.media_type === 'video') {
//           mediaElement.innerHTML = `<video controls>
//                                       <source src="${item.media_url}" type="video/mp4">
//                                     </video>`;
//         }
  
//         gallery.appendChild(mediaElement);
//       });
//     } catch (error) {
//       console.error('Error fetching media:', error);
//     }
//   }
  
//   fetchMedia();
  

async function fetchMedia() {
  try {
    const response = await fetch('get_media.php');
    const data = await response.json();

    // Now pass the data to the appropriate page-specific render function
    if (window.location.pathname.includes("portfolio")) {
      renderPortfolioMedia(data);
    } else if (window.location.pathname.includes("index")) {
      renderHomePageMedia(data);
    } else {
      console.log("No render function for this page");
    }
  } catch (error) {
    console.error('Error fetching media:', error);
  }
}

// // Example function to render on the homepage
// function renderHomePageMedia(mediaData) {
//   const gallery = document.getElementById('media-gallery');
//   gallery.classList.add('masonry-grid'); // Add Masonry grid class

//   mediaData.forEach(item => {
//     const mediaElement = document.createElement('div');
//     mediaElement.classList.add('media-item', 'masonry-item'); // Masonry grid item

//     if (item.media_type === 'photo') {
//       mediaElement.innerHTML = `
//         <a href="${item.media_url}" class="masonry-link" target="_blank">
//           <img src="${item.media_url}" alt="${item.title}" class="img-fluid masonry-img" />
//         </a>`;
//     } else if (item.media_type === 'video') {
//       mediaElement.innerHTML = `
//         <a href="${item.media_url}" class="masonry-link" target="_blank">
//           <video controls class="img-fluid masonry-img">
//             <source src="${item.media_url}" type="video/mp4">
//           </video>
//         </a>`;
//     }

//     gallery.appendChild(mediaElement);
//   });

//   // Initialize Masonry
//   initializeMasonry();
// }

function renderHomePageMedia(mediaData) {
  const gallery = document.getElementById('media-gallery');
  gallery.classList.add('masonry-grid'); // Add Masonry grid class

  const fragment = document.createDocumentFragment(); // Use fragment for performance

  mediaData.forEach(item => {
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




// Example function to render on the portfolio page
function renderPortfolioMedia(mediaData) {
  const portfolioGallery = document.getElementById('portfolio-gallery');
  portfolioGallery.classList.add('masonry-grid'); // Add Masonry grid class

  mediaData.forEach(item => {
    const mediaElement = document.createElement('div');
    mediaElement.classList.add('portfolio-item', 'masonry-item'); // Masonry grid item

    if (item.media_type === 'photo') {
      mediaElement.innerHTML = `
        <a href="${item.media_url}" class="masonry-link" target="_blank">
          <img src="${item.media_url}" alt="${item.title}" class="img-fluid masonry-img" />
        </a>`;
    } else if (item.media_type === 'video') {
      mediaElement.innerHTML = `
        <a href="${item.media_url}" class="masonry-link" target="_blank">
          <video controls class="img-fluid masonry-img">
            <source src="${item.media_url}" type="video/mp4">
          </video>
        </a>`;
    }

    portfolioGallery.appendChild(mediaElement);
  });

  // Initialize Masonry
  initializeMasonry();
}

// Function to add fade-in effect when media is loaded
function lazyLoadImages() {
  const mediaItems = document.querySelectorAll('.masonry-item img.lazy, .masonry-item video.lazy');
  mediaItems.forEach(item => {
    item.onload = () => {
      item.classList.add('loaded'); // Add loaded class for fade-in effect
    };
    // For videos, ensure they are loaded after playing
    if (item.tagName === 'VIDEO') {
      item.oncanplaythrough = () => {
        item.classList.add('loaded');
      };
    }
  });
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
      // If Masonry already exists, reload layout
      masonryInstance.reloadItems();
      masonryInstance.layout();
    }
  } else {
    console.error("Masonry grid element not found.");
  }
}



fetchMedia();


