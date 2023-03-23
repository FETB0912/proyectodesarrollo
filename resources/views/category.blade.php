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
  <!--CATEGORIAS-->
 <section  >

 <div class="container" style="margin-bottom: 1%">
    <div class="card-deck">
      <div class="borde">
        <div class="col-12 col-md-12 col-lg-9  " style="width: 100%">
          <div class="row  ">
            <div class="row row-cols-1 row-cols-md-3 g-3">
              @foreach ($categories as $category )
                <div class="col">
                 <div class="card h-90">
                    <img src="{{$category->image}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$category->name}}</h5>
                      <p class="card-text">{{$category->description}}</p>
                      <div class="card-footer text-center">
                       <a href="{{route('show.service', ['category_id' => $category->category_id] )}}" class="btn">Mostrar</a>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
             </div>
          </div>
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

</body>
</html>