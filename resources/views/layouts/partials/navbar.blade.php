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
         <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{auth()->user()->name ?? auth()->user()->username}}
            </a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/logout">Logout</a></li>
          </ul>
        </li>
        </form>
        
      </ul>
     
          @endauth

          
    </div>
  </div>
</nav>