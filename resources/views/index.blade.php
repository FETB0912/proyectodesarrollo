<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <!--bootstrap-->
  @include('layouts.partials.linksBoost')
  
    
</head>
<body>
@include('layouts.partials.navbar')

@include('layouts.partials.carrusel')
 
 <!--CATEGORIAS-->
 <section  >
   <div class="card-deck">
     <div class="container" style="margin-bottom: 1%">
       <div class="borde">
          <hr class="border border-primary border-3 opacity-75">
          <H2 class="centro"> ¿Quiénes somos?</H2>
          <p class="centro" > Alguna vez te has visto en la necesidad de buscar a una persona 
            que pueda reparar o realizar algún otro servicio pero no cuentas con un número de 
            teléfono o no tienes referencia alguna de los trabajos que realiza esa persona que
             te recomendaron. ¡Multitrabajos HN está para ayudarte! Contamos con un directorio 
             de personas cuyos servicios pueden ser lo que estés buscando, desde alguien que 
             pueda reparar tu lavadora hasta una persona que pueda maquillarte para ese evento 
             importante.
         </p>
         <hr >
         <H2 class=""> CATEGORIAS</H2>
         <hr >
         <div class="col-12 col-md-12 col-lg-9  " style="width: 100%">
           <div class="row justify-content-center ">
             <div class="row row-cols-1 row-cols-md-3 g-3">
             @include('layouts.partials.category')

             </div>
            </div>
          </div>
       </div>
     
       <!------ Tarjetas ----->
       
  </section>
  @include('layouts.partials.footer')
</div>

</body>
</html>
