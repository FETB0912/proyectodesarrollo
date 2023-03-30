<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator account</title>
    @include('layouts.partials.linksBoost')
    <style>
    body{
        width: 100%;
        height: 100vh;

        display:flex;
        align-items: center;
        justify-content: center;

    }


    .form-conainer{
        width: 400px;

    }
</style>
</head>
<body>
    <img src="LOGO.png" alt="">
<main class="form-container">
    @yield('content')
</main>
<a class="navbar-brand" style="font-size: 40px;" href="/">
        <img src="img/LOGO.png"  alt="Logo" width="200" height="200" >
        MULTITRABAJOS HN
      </a>
<div class="d-grid gap-2 col-6 mx-auto">
 <!-- <button class="btn btn-primary position-absolute top-50 start-50" type="button"><a href="/all-category">CATEGORIAS</button></a>
  <button class="btn btn-primary position-absolute top-50 start-30" type="button"><a href="/all-colaborators">COLABORADORES</button></a>
-->

<a class="btn btn-primary" href="{{ url('all-categories/') }}">Mostrar Categorias</a>
<!--<a class="btn btn-primary" href="{{ url('all-collaborators/') }}">Mostrar Colaboradores</a>-->
</div>
</body>
</html>