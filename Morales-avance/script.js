document.addEventListener('DOMContentLoaded', () => {
  const carousel = document.querySelector('.carousel');
  const images = Array.from(carousel.querySelectorAll('.image'));
  const descriptionDiv = document.getElementById('image-description');
  let angle = 0;
  const totalImages = images.length;

  function updateDescription() {
    const firstImage = images[0];
    const description = firstImage.dataset.description;
    descriptionDiv.textContent = description || 'Sin descripción';
  }

  function rotateCarousel() {
    angle -= 36; // 360 degrees / 10 images
    carousel.style.transform = `rotateY(${angle}deg)`;
    // Move the first image to the end of the array
    images.push(images.shift());
    // Recalculate the positions of the images
    images.forEach((image, index) => {
      image.style.transform = `rotateY(${index * 36}deg) translateZ(300px)`;
    });
    updateDescription();
  }

  // Inicializar posiciones de las imágenes
  images.forEach((image, index) => {
    image.style.transform = `rotateY(${index * 36}deg) translateZ(300px)`;
  });

  updateDescription();

  // Simular rotación cada 3 segundos (puedes ajustar esto)
  setInterval(rotateCarousel, 3000);
});
