<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!--iconos-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!--estilo css.-->
    <link rel="stylesheet" href="/css/estilo.css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/img/LOGO.png" alt="Logo" width="100" height="90">
                MULTITRABAJOS HN
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ACERCA DE</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
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
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </ul>
                <span class="material-symbols-outlined" class="icon" style="font-size: 50px"> person </span>
                <i class="bi bi-cart-plus-fill" style="font-size: 50px"></i>
            </div>
        </div>
    </nav>

    <div class="container pt-5">
        @foreach ($data['categorie'] as $categorie)
            <H2 class=""> {{ $categorie->name }}</H2>
        @endforeach
        <!------ Tarjetas ----->
        <div class="row row-cols-1 row-cols-md-3 g-3">
            @foreach ($data['services'] as $service)
                <!--- Tarjeta 1 --->
                <div class="row row-cols-1 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card text-bg-light" style="width: 17rem;">
                            <img class="card-img-top" src="{{ $service->url_image }}" width="50" height="140">
                            <div class="card-body text-white">
                                <h5 class="card-title">{{ $service->full_name }}</h5>
                                <div class="iconos">
                                    <ul class="action">
                                        <div class="ranking">
                                            <i class="bi bi-star-fill starts"></i>
                                            <i class="bi bi-star-fill starts"></i>
                                            <i class="bi bi-star-fill starts"></i>
                                            <i class="bi bi-star-fill starts"></i>
                                            <i class="bi bi-star-fill starts fa-gray"></i> (6)
                                        </div>
                                        <li><i class="bi bi-coin"> {{ $service->price }}</i></li>
                                        <li><i class="bi bi-telephone-fill"> {{ $service->phone }}</i></li>
                                        <li><i class="bi bi-envelope-fill"> {{ $service->email }}</i></li>
                                    </ul>
                                </div>
                                <h5 class="card-title">{{ $service->name }}</h5>
                                <div class="card-footer text-center">
<<<<<<< HEAD
                                    <a href="#" class="btn mt-3">Reservar</a>
=======
                                    <p class="card-text">Reserva tu servicio dando click en reservar</p>
                                    <a href="#" class="btn mt-1">Reservar</a>
>>>>>>> origin
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="pt-5"></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

</body>

<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> origin
