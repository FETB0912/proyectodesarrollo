<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca de Nosotros</title>
     <!--bootstrap-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!--iconos-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"
    />
    <link rel="stylesheet" href="css/estiloacd.css" />
</head>
<body>
    <!--Navbar-->
<nav class="navbar navbar-expand-lg" >
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
          <a class="nav-link " aria-current="page" href="#">INICIO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">ACERCA DE</a>
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
      <span class="material-symbols-outlined" class="icon" style="font-size: 40px;"> person </span>
      <i class="bi bi-cart-plus-fill" style="font-size: 40px;"></i>
    </div>
  </div>
</nav>

<!--Acerca de-->
<div class="container-fluid text-white  " style="background-image:url('img/topic.png'); background-size:cover; height:200px; vertical-align: middle;">
  <h1 >ACERCA DE NOSOTROS</h1>
</div>
<!--Quienes Somos-->

<div class="container my-5" >
  <!--Titulo-->
  <div class="row">
    <h2>Quienes somos</h2>
    <div class="col-md">
          <hr class="line">
          <p class="parra">Alguna vez te has visto en la necesidad de buscar a una persona que pueda reparar o 
          realizar algún otro servicio pero no cuentas con un número de teléfono o no tienes referencia alguna de los trabajos 
          que realiza esa persona que te recomendaron. ¡Multitrabajos HN está para ayudarte! Contamos con un directorio de personas cuyos servicios pueden ser lo que estés buscando, 
          desde alguien que pueda reparar tu lavadora hasta una persona que pueda maquillarte para ese evento importante.</p>
    </div>
    <div class="col-md">
      <img class="img-fluid" src="img/LOGO-exp.png" alt="">
    </div>
  </div>
</div>

<div class="container-fluid bg-info text-white text-center">
<br>  
<h1>Que nos hace differentes</h1>
  <div class="row">
  <div class="col-2"></div>
     <div class="col text-center parra">
        <i class="bi bi-megaphone" style="font-size: 60px;"></i>
        <h2>Promueve tu negocio</h2>
        <p >Promueve tu negocio. Se contratado mostrando tus servicios,
        muestra los trabajos o servicio que proporcionas con solo dar un click, contactanos</p>
      </div>
      <div class="col-1"></div>
      <div class="col text-center parra">
      <i class="bi bi-chat-square-text-fill " style="font-size: 55px;"></i>
        <h2>Recibe retroalimentación</h2>
        <p >Con retroalimentación de tus clientes, obtiene información valiosa 
          sobre el rendimiento de tus servicios y su clasificación por medio de estrellas.</p>
      </div>
      <div class="col-2"></div>
  </div>
</div>
<footer class="bd-footer py-4 py-md-5 mt-5 bg-body-tertiary">
  <div class="container py-4 py-md-5 px-4 px-md-3 text-body-secondary">
    <div class="row">
      <div class="col-lg-3 mb-3">
        <a class="d-inline-flex  mb-2 text-body-secondary text-decoration-none" href="/" aria-label="Bootstrap">
        <img src="img/LOGO-clip.png" alt="Logo" width="100" height="90" >
          
          <span class="fs-5">MULTITRABAJOS HN</span>
        </a>
        <ul class="list-unstyled small">
          <li class="mb-2">Designed and built with all the love in the world by the .</li>
          
        </ul>
      </div>
      <div class="col-6 col-lg-2 offset-lg-1 mb-3">
        <h5>Categorías</h5>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="/">HOGAR</a></li>
          <li class="mb-2"><a href="">BELLEZA</a></li>
          <li class="mb-2"><a href="">TECNICOS</a></li>
         
        </ul>
      </div>
      <div class="col-6 col-lg-2 mb-3">
        <h5>SERVICIOS</h5>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="">Servicios/ Presione aquí</a></li>
          
        </ul>
      </div>
      <div class="col-6 col-lg-2 mb-3">
        <h5>COMENTARIOA</h5>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="">Comentarios / Clientes</a></li>
         
         
        </ul>
      </div>
      <div class="col-6 col-lg-2 mb-3">
        <h5>CONTACTOS</h5>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="">Ayuda</a></li>
         
        </ul>
      </div>
    </div>
  </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>