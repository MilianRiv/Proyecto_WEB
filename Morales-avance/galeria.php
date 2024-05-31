<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Galería Circular</title>
  <link rel="stylesheet" href="estilos/styles.css"> <!-- Incluye tu archivo CSS -->
</head>

<body>
  <?php include_once 'header.php'; ?>
  <h1 class="Titulo">¿Que hacemos por y para ti?</h1>

  <div class="gallery">
    <div class="carousel">
      <div class="image" data-description="Investigación de mercados"><img
          src="./img/Carrousel/Investigación de mercados.webp" alt="Imagen 1"></div>
      <div class="image" data-description="Evaluación de la competencia"><img
          src="./img/Carrousel/Evaluación de la competencia.webp" alt="Imagen 2"></div>
      <div class="image" data-description="Planeación de estrategias de marketing"><img
          src="./img/Carrousel/Planeación de estrategias de marketing.webp" alt="Imagen 3"></div>
      <div class="image" data-description="Implementación de los planes"><img
          src="./img/Carrousel/Implementación de los planes.jpg" alt="Imagen 4"></div>
      <div class="image" data-description="Promoción de ventas"><img src="./img/Carrousel/Promoción de ventas.jpg"
          alt="Imagen 5"></div>
      <div class="image" data-description="Comunicación con el mercado"><img
          src="./img/Carrousel/Comunicación con el mercado.jpg" alt="Imagen 6"></div>
      <div class="image" data-description="Evaluación de la recepción del público"><img
          src="./img/Carrousel/Evaluación de la recepción del público.jpg" alt="Imagen 7"></div>
      <div class="image" data-description="Desarrollo de pronósticos"><img
          src="./img/Carrousel/Desarrollo de pronósticos.png" alt="Imagen 8"></div>
      <div class="image" data-description="Comunicación interna y externa"><img
          src="./img/Carrousel/Comunicación interna y externa.webp" alt="Imagen 9"></div>
      <div class="image" data-description="Investigación y adopción de nuevas tendencias"><img
          src="./img/Carrousel/Investigación y adopción de nuevas tendencias.jpg" alt="Imagen 10"></div>
      <!-- Agrega más imágenes según sea necesario -->
    </div>
  </div>

  <div id="image-description" class="description"></div> <!-- Sección para la descripción -->

  <script src="funciones/script.js"></script>
  <br><br>
  <!-- //agregar un grid con textos descirptivos de las areas de marketing mencionadas.  -->
  <div class="grid-container">
    <div class="grid-item">
      <h3>Investigación de mercados</h3>
      <p>La investigación de mercados es el proceso de recopilar, analizar e interpretar información sobre el mercado,
        sobre un producto o servicio que se ofrecerá a la venta en ese mercado, y sobre los consumidores potenciales.
        Permite a las empresas entender mejor las necesidades y deseos de sus clientes, así como la dinámica del
        mercado.</p>
    </div>
    <div class="grid-item">
      <h3>Evaluación de la competencia</h3>
      <p>La evaluación de la competencia implica analizar a los competidores directos e indirectos para entender sus
        fortalezas y debilidades. Esto ayuda a las empresas a identificar oportunidades y amenazas en el mercado, así
        como a desarrollar estrategias para diferenciarse y competir eficazmente.</p>
    </div>
    <div class="grid-item">
      <h3>Planeación de estrategias de marketing</h3>
      <p>La planeación de estrategias de marketing es el proceso de desarrollar estrategias específicas para alcanzar
        los objetivos de marketing de una empresa. Esto incluye la identificación del público objetivo, la creación de
        mensajes clave, la selección de canales de comunicación y la asignación de recursos para las campañas de
        marketing.</p>
    </div>
    <div class="grid-item">
      <h3>Implementación de los planes</h3>
      <p>La implementación de los planes de marketing implica llevar a cabo las estrategias y tácticas planificadas.
        Esto incluye la creación y distribución de contenido, la gestión de campañas publicitarias, la supervisión de
        las actividades de marketing y la evaluación del rendimiento de las iniciativas de marketing.</p>
    </div>
    <div class="grid-item">
      <h3>Promoción de ventas</h3>
      <p>La promoción de ventas es un conjunto de actividades y tácticas diseñadas para aumentar la demanda de un
        producto o servicio. Esto puede incluir descuentos, cupones, concursos, muestras gratuitas y otros incentivos
        para estimular las compras y atraer nuevos clientes.</p>
    </div>
    <div class="grid-item">
      <h3>Comunicación con el mercado</h3>
      <p>La comunicación con el mercado abarca todas las formas en que una empresa se comunica con sus clientes y el
        público en general. Esto incluye la publicidad, las relaciones públicas, el marketing digital, la gestión de
        redes sociales y otras actividades destinadas a crear y mantener una relación con el mercado objetivo.</p>
    </div>
    <div class="grid-item">
      <h3>Evaluación de la recepción del público</h3>
      <p>La evaluación de la recepción del público implica medir y analizar la respuesta del mercado a los productos,
        servicios y campañas de marketing de una empresa. Esto se puede hacer a través de encuestas, análisis de datos
        de ventas, monitoreo de redes sociales y otras herramientas de retroalimentación.</p>
    </div>
    <div class="grid-item">
      <h3>Desarrollo de pronósticos</h3>
      <p>El desarrollo de pronósticos en marketing implica la predicción de futuras tendencias del mercado, ventas y
        comportamiento del consumidor. Esto se basa en el análisis de datos históricos, las condiciones actuales del
        mercado y otros factores relevantes para ayudar a las empresas a planificar sus estrategias futuras.</p>
    </div>
    <div class="grid-item">
      <h3>Comunicación interna y externa</h3>
      <p>La comunicación interna y externa se refiere a las prácticas de comunicación dentro de la empresa (comunicación
        interna) y entre la empresa y el público externo (comunicación externa). La comunicación efectiva en ambos
        frentes es crucial para el éxito organizacional, ya que garantiza que todos los miembros de la empresa estén
        alineados y que la empresa mantenga una buena imagen pública.</p>
    </div>
    <div class="grid-item">
      <h3>Investigación y adopción de nuevas tendencias</h3>
      <p>La investigación y adopción de nuevas tendencias implica estar al tanto de las últimas tendencias del mercado y
        adoptar aquellas que sean relevantes y beneficiosas para la empresa. Esto puede incluir nuevas tecnologías,
        prácticas de marketing innovadoras, cambios en el comportamiento del consumidor y otras tendencias emergentes
        que puedan impactar positivamente el negocio.</p>
    </div>
  </div>

</body>

</html>
<?php include_once 'footer.php'; ?>