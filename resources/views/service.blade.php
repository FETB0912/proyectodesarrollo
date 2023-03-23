<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<!--bootstrap-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!--iconos-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"
    />
     <!--estilo css.-->
    <link rel="stylesheet" href="css/estilo.css" />
</head>
<body>
<nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;" >
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="img/LOGO.png" alt="Logo" width="100" height="90" >
        MULTITRABAJOS HN
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">INICIO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">ACERCA DE</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              SERVICIOS
            </a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item " href="#">HOGAR</a></li>
            <li><a class="dropdown-item" href="#">BELLEZA</a></li>
            <li><a class="dropdown-item" href="#">TECNICOS</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">CONTACTOS</a>
        </li>
        <form class="d-flex" >
         <input class="form-control me-2" type="search" placeholder="Search" >
         <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </ul>
      <span class="material-symbols-outlined" class="icon" style="font-size: 50px"> person </span>
      <i class="bi bi-cart-plus-fill" style="font-size: 50px"></i>
    </div>
  </div>
 </nav>

<div class="container">
  <!------ Tarjetas ----->
  <section class="row card-deck g-2">
      <!--- Tarjeta 1 --->
      <div class="col col-s-12">
        <div class="card">
          <img src="https://mejorconsalud.as.com/wp-content/uploads/2021/11/diseno-interiores.jpg" class="card-img-top">
          <div class="card-body text-light">
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <div class="card-footer text-center">
              <a href="#" class="btn">Diseño de interiores</a>
            </div>
          </div>
        </div>
      </div>
      <!--- Tarjeta 2 --->
      <div class="col col-s-12">
      <div class="card">
          <img src="https://i1.wp.com/www.detodoplagas.com/wp-content/uploads/2017/06/Conoce-que-debe-de-ofrecerte-un-servicio-de-jardineria.jpg?fit=1024%2C576&ssl=1" class="card-img-top" alt="...">
          <div class="card-body text-light">
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <div class="card-footer text-center">
              <a href="#" class="btn">Jardineria</a>
            </div>
          </div>
        </div>
      </div>
</section>
</div>
</body>
</html>