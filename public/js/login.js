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