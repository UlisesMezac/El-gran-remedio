<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imagenes/icono.svg" />
    <title>Document</title>
</head>
<body>
  <h1>Información personal</h1>
  <p>Nombre: {{auth()->user()->name }}  </p>
  <p>Apellidos: {{auth()->user()->apellidoP }} {{auth()->user()->apellidoM }}  </p>
  <p>Correo: {{auth()->user()->email }}  </p>
  <p>Contraseña: {{auth()->user()->password }}  </p>
  <p>Telefono: {{auth()->user()->telefono }}  </p>

  <h1>Domicilio</h1>
  <p>Estado: {{auth()->user()->estado }}  </p>
  <p>Código postal: {{auth()->user()-> cp }}  </p>
  <p>Colonia: {{auth()->user()->colonia }}  </p>
  <p>Calle: {{auth()->user()->calle }}  </p>
  <p>Numero exterior: {{auth()->user()->noEx }}  </p>
  <p>Numero interior: {{auth()->user()->noIn }}  </p>

 <button>Editar información</button>

</body>
</html>


    