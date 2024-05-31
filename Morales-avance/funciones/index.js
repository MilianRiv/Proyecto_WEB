document.addEventListener('DOMContentLoaded', (event) => {
    const iframes = document.querySelectorAll('.youtube-video');
  
    iframes.forEach(iframe => {
      const src = iframe.src;
      const autoplaySrc = `${src}&autoplay=1`;
  
      iframe.addEventListener('mouseover', () => {
        iframe.src = autoplaySrc;
      });
  
      iframe.addEventListener('mouseout', () => {
        iframe.src = src; // Reset the src to stop the video when mouse leaves
      });
    });
  });
  