async function fetchMedia() {
    try {
      const response = await fetch('get_media.php');
      const data = await response.json();
  
      const gallery = document.getElementById('media-gallery');
      data.forEach(item => {
        const mediaElement = document.createElement('div');
        mediaElement.classList.add('media-item');
  
        if (item.media_type === 'photo') {
          mediaElement.innerHTML = `<img src="${item.media_url}" alt="${item.title}" />`;
        } else if (item.media_type === 'video') {
          mediaElement.innerHTML = `<video controls>
                                      <source src="${item.media_url}" type="video/mp4">
                                    </video>`;
        }
  
        gallery.appendChild(mediaElement);
      });
    } catch (error) {
      console.error('Error fetching media:', error);
    }
  }
  
  fetchMedia();
  