<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Galería Circular</title>
  <link rel="stylesheet" href="styles.css"> <!-- Incluye tu archivo CSS -->
</head>
<body>
  <?php include_once 'header.php'; ?>

  <div class="gallery">
    <div class="carousel">
      <div class="image" data-description="Descripción de la imagen 1"><img src="./img/hola1.jpg" alt="Imagen 1"></div>
      <div class="image" data-description="Descripción de la imagen 2"><img src="./img/hola2.jpg" alt="Imagen 2"></div>
      <div class="image" data-description="Descripción de la imagen 3"><img src="./img/hola3.jpg" alt="Imagen 3"></div>
      <div class="image" data-description="Descripción de la imagen 4"><img src="./img/hola4.jpg" alt="Imagen 4"></div>
      <div class="image" data-description="Descripción de la imagen 5"><img src="./img/hola5.jpg" alt="Imagen 5"></div>
      <div class="image" data-description="Descripción de la imagen 6"><img src="./img/hola6.jpg" alt="Imagen 6"></div>
      <div class="image" data-description="Descripción de la imagen 7"><img src="./img/hola7.jpg" alt="Imagen 7"></div>
      <div class="image" data-description="Descripción de la imagen 8"><img src="./img/hola8.jpg" alt="Imagen 8"></div>
      <div class="image" data-description="Descripción de la imagen 9"><img src="./img/hola9.jpg" alt="Imagen 9"></div>
      <div class="image" data-description="Descripción de la imagen 10"><img src="./img/hola10.jpg" alt="Imagen 10"></div>
      <!-- Agrega más imágenes según sea necesario -->
    </div>
  </div>

  <div id="image-description" class="description"></div> <!-- Sección para la descripción -->

  <script src="script.js"></script>
<br><br><br><br><br>
<p class="centered-list">nuevo texto a rellenar wiiiii</p>
<p class="centered-list">nuevo texto a rellenar wiiiii</p>
<ul class="centered-list">
  <li>nuevo texto a rellenar wiiiii</li>
  <br>
  <li>nuevo texto a rellenar wiiiii</li>
</ul>
</body>
</html>
<?php include_once 'footer.php'; ?>
