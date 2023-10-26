<?php session_start();
  if (!isset($_SESSION['nombre'])) {
    header("location:index.php");
  }
?>



<!doctype html>
<html lang="en">
  <head>

  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/inicio.css">

    <title>Inicio</title>
  </head>

  <body>


  <nav class="navbar navbar-expand-lg  static-top">
  <div class="container">
    <a class="navbar-brand" href="inicio.php">
      <img src="logo/logobosco.png" alt="..." height="80">
    </a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Cafeteria</a>
        </li>
        &nbsp;
        &nbsp;
        <li class="nav-item dropdown">
          <a style="color: darkblue" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo $_SESSION['nombre']; ?>&nbsp;
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="servidor/login/logout.php">Salir del Sistema</a></li>

          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Page Content -->
<div class="container">
  <h1 class="mt-4" style= "color: darkblue">CAFETERIA DEL COLEGIO DON BOSCO</h1>
  <p>Sistema de Registro de estudiantes para la Cafeteria del Colegio Don Bosco</p>
</div>

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
<div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
</div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="7000">
      <img src="logo/panqueques.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="7000">
      <img src="logo/sandwich.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Siguiente</span>
  </button>
</div>

    
    <!-- Cargar jQuery primero -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+0ne01xSLjXb6v8q0tlXLvzFL/uk5knaIukvyJq/A2P6DyJ" crossorigin="anonymous"></script>

<!-- Luego, carga Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



  </body>
</html>