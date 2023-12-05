
<?php

$currentPage = 'index';

   include_once (__DIR__.'/componentes/header.php')
?>

<main class="conteiner bg-info">
  <h1>
    Página Inicial
  </h1>

  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="./img/10-min.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" >
      <img src="./img/11-min.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img/12-min.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img/13-min.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img/14-min.png" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
</main>

<?php
   include_once (__DIR__.'/componentes/footer.php')
?>