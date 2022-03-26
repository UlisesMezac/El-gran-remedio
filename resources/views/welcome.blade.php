<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imagenes/icono.svg" />
    <title>El gran remedio | Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css">
    <link rel="stylesheet" href="css/estilosIndex.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid d-flex">
      <a class="navbar-brand justify-content-start" href="#">
        <img src="imagenes/logo.png" alt="Logo" width="200px" height="50px">
      </a>
      <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" href="login" > Iniciar sesión</a>
          <a class="nav-link" href="register">Registarse</a>
          <a class="nav-link" href="#">Contactanos</a>
        </div>
      </div>
    </div>
  </nav>

  <scrip> 

    <main class="container-md">

      <div class="glider-contain">
        <div class="glider">
          <div>
            <img src="imagenes/slider/bannerjpg.jpg" alt="Slide 1">
          </div>
          <div>
            <img src="imagenes/slider/1.png" alt="Slide 2">
          </div>
          <div>
            <img src="imagenes/slider/fermentado.jpg" alt="Slide 3">
          </div>
          <div>
            <img src="imagenes/slider/0.jpg" alt="Slide 4">
          </div>
        </div>
      
        <button aria-label="Previous" class="glider-prev btn">«</button>
        <button aria-label="Next" class="glider-next btn">»</button>
        <div role="tablist" class="dots"></div>
      </div>

      <section class="titulo-prin">
        <article>
          <h4 class="titulo-verde">"PARA TODO MAL MEZCAL PARA TODO BIEN, <br>TAMBIÉN Y SI NO HAY REMEDIO LITRO Y MEDIO"</h4>
          <p>La planta de maguey silvestre nace y crece en las lomas, entre el bosque de forma natural y<br>orgánica sin intervención humana, por lo tanto, no contiene herbicidas ni fertilizante.</p>
          <p>El proceso para preparar mezcal, una bebida ancestral que ha ganado el agrado de muchos <br>conocedores nacionales a lo largo de la historia y el reconocimiento internacional en la actualidad.</p>
        </article>
      </section>

      <h4 class="titulo-verde">Etapas del proceso.</h4>

      <section class="etapas">
        <article>
          <div class="card" onclick=etapa1()>
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title">Selección</h4>
            </div>
          </div>
        </article>
        <article>
          <div class="card" onclick=etapa2()>
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title">Jimar</h4>
            </div>
          </div>
        </article>
        <article>
          <div class="card" onclick=etapa3()>
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title">Juntar</h4>
            </div>
          </div>
        </article>
        <article>
          <div class="card" onclick=etapa4()>
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title">Transportar</h4>
            </div>
          </div>
        </article>
        <article>
          <div class="card" onclick=etapa5()>
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title">Recolectar</h4>
            </div>
          </div>
        </article>
        <article>
          <div class="card" onclick=etapa6()>
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title">Hornear</h4>
            </div>
          </div>
        </article>
        <article>          
          <div class="card" onclick=etapa7()>
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h4 class="card-title">Triturar </h4>
          </div>
        </div>
      </article>
        <article>          
          <div class="card" onclick=etapa8()>
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h4 class="card-title">Fermentar</h4>
          </div>
        </div>
      </article>
        <article>
          <div class="card" onclick=etapa9()>
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title">Destilar</h4>
            </div>
          </div>
        </article>
        <article>
          <div class="card" onclick=etapa10()>
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title">Catar</h4>
            </div>
          </div>
        </article>
      </section>

      <h4 class="titulo-verde">Galería.</h4>


    </main>

      <footer>
        <div class="contenedor-footer">
          <div class="content-foo">
            <h4>Teléfono</h4>
            <p>7551024094
            </p>
          </div>
          <div class="content-foo">
            <h4>Correo</h4>
            <p>elgranremediomezcales@gamil.com</p>
          </div>
          <div class="content-foo">
            <h2 class="titulo-final">&copy; El gran remedio</h2>
          </div>
        </div>
      </footer>

    <script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/script.js"></script>

    <script> 
      new Glider(document.querySelector('.glider'), {
        slidesToShow: 1,
        dots: '#dots',
        draggable: true,
        arrows: {
          prev: '.glider-prev',
          next: '.glider-next'
        }
      });

      //modales
      const login = () => {
        Swal.fire({
            title: 'Login',
            html: `
          <h1>Hola wapooo</h1> 
            `,
            imageUrl: '/imagenes/etapas/seleccion.jpg',
            imageHeight: 250,
            imageWitdh: 250,
            imageAlt: 'Selección'
          })
      }
    </script>

</body>
</html>
