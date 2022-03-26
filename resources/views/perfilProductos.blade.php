<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imagenes/icono.svg" />
    <title>El gran remedio</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilosPerfil.css">
</head>

<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#opciones">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <!-- logo -->
    <a class="navbar-brand" href="#">
      <img src="{{asset('imagenes/logo.png')}}" width="180" height="50" alt="">
    </a>
    
    <!-- enlaces -->
    <div class="collapse navbar-collapse" id="opciones">   
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Mis compras</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="perfilUsuario">Perfil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"> Bienvenid@ {{auth()->user()->name }}</a>
       </li>
      </ul>
    </div>

    <a class=" carrito navbar-brand" href="#">
      <img src="{{asset('imagenes/carrito.png')}}" width="50" height="50" alt="">
    </a>
  </nav>
<body>
  <div class="contenedor">

    <div class="img">
      <img src="imagenes/{{$producto->Imagen}}"> </a>
    </div>
    

    <div class="info">
          {{ $producto->NombreProducto }} 
          {{ $producto->PorcAlcohol }}
          {{ $producto->Presentacion }}
          {{ $producto->Descripcion }}
    </div>

    
     


  </div>



</body>
</html>
  


           
