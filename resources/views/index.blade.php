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

<!--CARRUSEL-->
<div class="container" style="margin-bottom: 1%">
  <div class="borde">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1">
        </button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="1"
          aria-label="Slide 2">
        </button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="2"
          aria-label="Slide 3">
        </button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="3"
          aria-label="Slide 4">
        </button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="4"
          aria-label="Slide 5">
        </button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/jar.jpg" class="d-block w-100 " alt="imagen" width="50" />
        </div>
        <div class="carousel-item">
          <img src="img/refri.jpg" class="d-block w-100 " alt="imagen" width="50" />
        </div>
        <div class="carousel-item">
         <img src="img/elec.jpg" class="d-block w-100 " alt="imagen" width="50" />
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next" >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    </div>
 </div>
 
 <!--CATEGORIAS-->
 <section  >
   <div class="card-deck">
     <div class="container" style="margin-bottom: 1%">
       <div class="borde">
          <hr class="border border-primary border-3 opacity-75">
          <H2 class="centro"> ¿Quiénes somos?</H2>
          <p class="centro" > This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
            This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
            This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
            This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
         </p>
         <hr >
         <H2 class=""> CATEGORIAS</H2>
         <hr >
         <div class="col-12 col-md-12 col-lg-9  " style="width: 100%">
           <div class="row justify-content-center ">
             <div class="row row-cols-1 row-cols-md-3 g-3">
                <div class="col">
                  <div class="card h-100">
                   <img src="img/ho1.jpg" class="card-img-top" alt="...">
                   <div class="card-body">
                     <h5 class="card-title">HOGAR</h5>
                     <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                     <div class="card-footer text-center">
                        <a href="#" class="btn">Mostrar</a>
                     </div>
                    </div>
                 </div>
               </div>
               <div class="col">
                 <div class="card h-100">
                   <img src="img/be1.jpg" class="card-img-top" alt="...">
                   <div class="card-body">
                     <h5 class="card-title">BELLEZA</h5>
                     <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                     <div class="card-footer text-center">
                       <a href="#" class="btn">Mostrar</a>
                      </div>
                   </div>
                 </div>
               </div>
               <div class="col">
                 <div class="card h-100">
                   <img src="img/refri.jpg" class="card-img-top" alt="...">
                   <div class="card-body">
                     <h5 class="card-title">TECNICOS</h5>
                     <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                      <div class="card-footer text-center">
                       <a href="#" class="btn">Mostrar</a>
                     </div>
                   </div>
                  </div>
                </div>
             </div>
            </div>
          </div>
       </div>
     
       <!------ Tarjetas ----->
       <div class="col-12 col-md-12 col-lg-9  " style="width: 100%">
         <div class="row justify-content-center ">
           <hr>
           <br>
           <H2 class=""> SERVICIOS MAS SOLICITADOS</H2>
           <hr>
           <section class="personal ">
             <div class="row mt-3">
               <div class="card-group g-2">
                  <!--- Tarjeta 1 --->
                  <div class="col">
                    <div class="card text-bg-light" style="width: 16rem;">
                      <img src="https://st1.uvnimg.com/dims4/default/c0b3972/2147483647/thumbnail/1240x698/quality/75/?url=https%3A%2F%2Fuvn-brightspot.s3.amazonaws.com%2Fassets%2Fvixes%2Fimj%2Fvivirsalud%2FL%2FLas-caracteristicas-de-los-diferentes-tipos-de-rostros-2.jpg" width="50" height="140" class="card-img-top img-border">
                      <div class="card-body text-dark">
                        <h5 class="card-title">Adriana Carranzas</h5>
                        <div class="iconos">
                         <ul class="action">
                         <div class="ranking">
                           <i class="bi bi-star-fill starts"></i>
                           <i class="bi bi-star-fill starts"></i>
                           <i class="bi bi-star-fill starts"></i>
                           <i class="bi bi-star-fill starts"></i>
                           <i class="bi bi-star-fill starts fa-gray"></i> (6)
                         </div>
                         <i class="bi bi-clock"> 5 años de experiencia</i>
                         <li><i class="bi bi-coin"> L 900.00</i></li>
                         <li><i class="bi bi-telephone-fill"> 8754-2555</i></li>
                       </ul>
                     </div>
                     <h5 class="card-title">Limpieza</h5>
                     <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                     <div class="card-footer text-center ">
                       <a href="#" class="btn">Reservar</a>
                      </div>
                    </div>
                  </div>
               </div>
               <!--- Tarjeta 2 --->
               <div class="col">
                 <div class="card text-bg-light" style="width: 16rem;">
                   <img src="img/per1.jpg" width="50" height="140" class="card-img-top img-border">
                   <div class="card-body  text-dark">
                     <h5 class="card-title">Card title</h5>
                     <div class="iconos">
                       <ul class="action">
                         <div class="ranking">
                           <i class="bi bi-star-fill starts"></i>
                           <i class="bi bi-star-fill starts"></i>
                           <i class="bi bi-star-fill starts"></i>
                           <i class="bi bi-star-fill starts"></i>
                           <i class="bi bi-star-fill starts fa-gray"></i> (6)
                         </div>
                         <i class="bi bi-clock"> 5 años de experiencia</i>
                         <li><i class="bi bi-coin"> L 900.00</i></li>
                         <li><i class="bi bi-telephone-fill"> 8754-2555</i></li>
                       </ul>
                     </div>
                     <h5 class="card-title">Make-up</h5>
                     <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                     <div class="card-footer text-center">
                       <a href="#" class="btn">Reservar</a>
                      </div>
                   </div>
                 </div>
                </div>
                <!--- Tarjeta 3 --->
                <div class="col">
                  <div class="card text-bg-light" style="width: 16rem;">
                   <img src="img/per1.jpg" width="50" height="140" class="card-img-top img-border">
                   <div class="card-body  text-dark">
                     <h5 class="card-title">Card title</h5>
                     <div class="iconos">
                        <ul class="action">
                          <div class="ranking">
                            <i class="bi bi-star-fill starts"></i>
                            <i class="bi bi-star-fill starts"></i>
                            <i class="bi bi-star-fill starts"></i>
                            <i class="bi bi-star-fill starts"></i>
                            <i class="bi bi-star-fill starts fa-gray"></i> (6)
                          </div>
                          <i class="bi bi-clock"> 7 años de experiencia</i>
                          <li><i class="bi bi-coin"> L 900.00</i></li>
                          <li><i class="bi bi-telephone-fill"> 8754-2555</i></li>
                        </ul>
                     </div>
                     <h5 class="card-title">Pedicure</h5>
                     <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                     <div class="card-footer text-center">
                       <a href="#" class="btn">Reservar</a>
                     </div>
                   </div>
                 </div>
               </div>
               <!--- Tarjeta 4 --->
               <div class="col">
                 <div class="card text-bg-light" style="width: 17rem;">
                   <img class="card-img-top img-border" src="http://resizer.sevilla.abc.es/resizer/resizer.php?imagen=https://sevilla.abc.es/estilo/bulevarsur/wp-content/uploads/sites/14/2020/07/cortes-de-pelo-adelgazan-rostro.jpg&nuevoancho=652" width="50" height="140">
                   <div class="card-body  text-dark">
                     <h5 class="card-title">Card title</h5>
                     <div class="iconos">
                       <ul class="action">
                         <div class="ranking">
                           <i class="bi bi-star-fill starts"></i>
                           <i class="bi bi-star-fill starts"></i>
                           <i class="bi bi-star-fill starts"></i>
                           <i class="bi bi-star-fill starts"></i>
                           <i class="bi bi-star-fill starts fa-gray"></i> (6)
                         </div>
                         <i class="bi bi-clock"> 3 años de experiencia</i>
                         <li><i class="bi bi-coin"> L 900.00</i></li>
                         <li><i class="bi bi-telephone-fill"> 8754-2555</i></li>
                        </ul>
                     </div>
                     <h5 class="card-title">Jardinería</h5>
                     <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                     <div class="card-footer text-center">
                       <a href="#" class="btn">Reservar</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section> 
         </div>
       </div>
      </div>
   </div>
  </section>
  <footer class="bd-footer py-4 py-md-5 mt-5 bg-body-tertiary">
    <div class="container py-4 py-md-5 px-4 px-md-3 text-body-secondary">
      <div class="row">
        <div class="col-lg-3 mb-3">
          <a class="d-inline-flex  mb-2 text-body-secondary text-decoration-none" href="/" aria-label="Bootstrap">
           <img src="img/LOGO.png" alt="Logo" width="100" height="90" >
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
  </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
