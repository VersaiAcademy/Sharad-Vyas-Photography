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

      const gallery = document.querySelector('.hero-slider'); // Owl Carousel container
      gallery.innerHTML = ''; // Clear previous content

      data.forEach(item => {
          if (item.media_type === 'photo') {
              // Create Owl Carousel slide for photos
              const slide = document.createElement('div');
              slide.classList.add('hero-item', 'portfolio-item');
              slide.innerHTML = `
                  <div class="set-bg" style="background-image: url('${item.media_url}');">
                      <a href="${item.media_url}" class="hero-link" target="_blank"></a>
                  </div>
              `;
              gallery.appendChild(slide);
          }
      });

      // Reinitialize Owl Carousel after adding dynamic content
      $('.hero-slider').owlCarousel({
          loop: true,
          margin: 10,
          nav: true,
          items: 1,
          autoplay: true,
          autoplayTimeout: 3000
      });

  } catch (error) {
      console.error('Error fetching media:', error);
  }
}

fetchMedia();

