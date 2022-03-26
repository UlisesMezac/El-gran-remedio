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
    const etapa1 = () => {
      Swal.fire({
          title: 'Selección',
          html: `Proceso de selección del maguey es importante elegir el maduro, 
          de este depende el sabor único de un buen mezcal ancestral, 
          a simple vista todas las plantas de maguey son iguales, el conocedor las identifica por su olor, 
          para llagar a este punto tiene que pasar un periodo de 5 años y no debe de tener tallo o quiote.`,
          imageUrl: '/imagenes/etapas/seleccion.jpg',
          imageHeight: 250,
          imageWitdh: 250,
          imageAlt: 'Selección'
        })
    }
  
    const etapa2 = () => {
      Swal.fire({
          title: 'Jimar',
          html: `Al empezar a jimar o cortar las pencas verdes y pulposas de maguey, brota agua miel y
          desprenden un olor característico y único de la madurez, la apariencia de la piña jimada es blanca.`,
          imageUrl: '/imagenes/etapas/jimar.jpg',
          imageHeight: 250,
          imageWitdh: 250,
          imageAlt: 'Jimar'
        })
    }
  
    const etapa3 = () => {
      Swal.fire({
          title: 'Juntar',
          html: `Por lo general los magueyes maduros no se encuentran cerca uno del otro, 
          es precisó acercarlos después de jimarlos para poder trasportarlos al horno de la vinata o mezcalera.`,
          imageUrl: '/imagenes/etapas/juntar.jpg',
          imageHeight: 250,
          imageWitdh: 250,
          imageAlt: 'Juntar'
        })
    }
  
    const etapa4 = () => {
      Swal.fire({
          title: 'Transportar',
          html: `Regularmente el maguey se ubica en las lomas y praderas, entre arboles y rocas, 
          el acceso es complicado, anteriormente en estos casos el transporte principal eran animales de carga como burros, 
          en la actualidad se usan cuatrimotos o camionetas de carga atreves de brechas o sendero.`,
          imageUrl: '/imagenes/etapas/transportar.png',
          imageHeight: 250,
          imageWitdh: 250,
          imageAlt: 'Transportar'
        })
    }
  
    const etapa5 = () => {
      Swal.fire({
          title: 'Recolectar',
          html: `<ul>
          <li>Se recolecta un monto determinado de piñas de maguey, 
          de acuerdo al tamaño del horno. por lo regular se recolectan entre 80 y 100 cargas o piñas de un promedio 
          30 kilogramos o 3 toneladas.</li>
          <li>Se recolecta leña de árboles recién cortados, con la finalidad de crear mucho carbón y braza.</li>
          <li>Pasto silvestre suficiente para cubrir y proteger el maguey con una capa, para que no se mezcle con la 
          tierra que lo cubrirá en el horno.</li>
          </ul>`,
          imageUrl: '/imagenes/etapas/recolectar.png',
          imageHeight: 250,
          imageWitdh: 250,
          imageAlt: 'Recolectar'
        })
    }
  
    const etapa6 = () => {
      slider();
      Swal.fire({
        title: 'Hornear',
        html: `
        <p>Es una apertura de 10 metros de diámetro y 4 metros de profundidad en la tierra, 
        con las paredes forrado de piedras.</p>
        <div>
          <ul>
            <li>Retirar una capa de piedras de medio metro que se utilizan para soportar el maguey.</li>
            <li>Limpiar el horno de las cenizas y carbón.</li>
            <li>Introducir y colocar la leña dentro en el fondo del horno.</li>
            <li>Incorporar la capa de piedras que separa el maguey del fuego directo y mantiene alta temperatura.</li>
            <li>Se prende la leña en el horno y se deja un determinado tiempo, hasta que las piedras tomen el color del fuego, 
            aproximadamente 6 a 8 horas.</li>
            <li>Se coloca estratégicamente el maguey recolectado dentro del horno y encima de las piedras.</li>
            <li>Se cubre con una capa del pasto silvestre</li>
            <li>Se tapa hasta ocultarse de tierra suelta con un grosor de 10 centímetros, no debe fugarse el humo, el maguey permanece enterrado por 5 días.</li>
            <li>Se retira la capa de tierra suelta y el pasto silvestre</li>
            <li>El maguey queda en el horno hasta enfiarse, su color en café y rojo, con un olor a miel y dulce sabor</li>
          </ul>
        </div>`,
        imageUrl: '/imagenes/etapas/hornear.jpg',
        imageHeight: 250,
        imageWitdh: 250,
        imageAlt: 'Hornear'
      })
    }
  
    const etapa7 = () => {
      Swal.fire({
          title: 'Triturar',
          html: `<p>En una pileta de madera de 2x2x1 m. se muele o tritura el maguey, 
          con la finalidad de extraer el jugo o miel y pueda ser depositado en contenedores para fermentar. 
          Se golpea en repetidas ocasiones con un mazo de madera dentro de la pileta hasta aplastar o moler.</p>`,
          imageUrl: '/imagenes/etapas/Triturar.png',
          imageHeight: 250,
          imageWitdh: 250,
          imageAlt: 'Triturar'
        })
    }
  
    const etapa8 = () => {
      Swal.fire({
          title: 'Fermentar',
          html: `
          La fermentación del maguey es un proceso clave para un buen mezcal, se deben de cuidar a detalle su procedimiento:
          <ul>
              <li>Limpiar uno y otra vez el interior del recipiente o cuero.</li>
              <li>Los contenedores deben de ser piel de ganado vacuno, con el pelaje en el interior.</li>
              <li>Por cada porción de maguey molido, cantidad de agua proporcional.</li>
              <li>Pisar o prensar con los pies (limpios).</li>
              <li>Dejar fermentando de 8 a 10 días, revisar constantemente el grado de alcohol en el jugo o charape.</li>
              <li>Al llegar al punto indicado se tiene que destilar, si le falta o se pasa fermentación este no rinde buen mezcal.</li>
          </ul>`,
          imageUrl: '/imagenes/etapas/Fermentar.jpeg',
          imageHeight: 250,
          imageWitdh: 250,
          imageAlt: 'Fermentar'
        })
    }
  
    const etapa9 = () => {
      Swal.fire({
          title: 'Destilar',
          html: `Este es el punto más crítico, solo para conocedores o expertos, la cata del mezcal.
          <br>
          En el proceso de destilado, el mezcal de alto al inicio de la producción tiene un alto grado de alcohol y 
          al pasar un rato disminuye, por lo tanto, el catador tiene que poner puntual atención en su sabor, 
          olor y color. De él depende la calidad y rendimiento de un buen mezcal artesanal.`,
          imageUrl: '/imagenes/etapas/destilar.png',
          imageHeight: 250,
          imageWitdh: 250,
          imageAlt: 'Destilar'
        })
    }
  
    const etapa10 = () => {
        Swal.fire({
          title: 'Catar',
          html: `
          <ul>
              <li>Para destilar un buen mezcal refinado y listo para ser tomado es necesario repetir la destilación.</li>
              <li>Primera destilación, el maguey fermentado se vierte en una olla de madera con fondo de cobre y en la tapa fluye agua fría, se destila el mezcal ordinario o de segunda, este paso se repite hasta terminar el maguey fermentado al punto indicado de alcohol.</li>
              <li>Segunda destilación, Se vierte en la olla de madera el mezcal ordinario que se produjo en la primera destilación, esta vez se producirá o destilará el famoso mezcal de alto.</li>
          </ul>`,
          imageUrl: '/imagenes/etapas/probar.jpg',
          imageHeight: 250,
          imageWitdh: 250,
          imageAlt: 'Catar'
        })
  }