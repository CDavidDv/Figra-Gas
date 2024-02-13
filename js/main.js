$(document).ready(function() {



  $.ajax({
    url: './controller/pedir_datos.php',
    method: 'POST', // O el método HTTP que corresponda
    data: {op: 'obtener_datos'}, // Envía la acción 'obtener_datos' al controlador
    dataType: 'json', // Especifica el tipo de datos esperados en la respuesta
    
    success: function(response) {
      // El servidor ha respondido correctamente
      var precio_kilo_actual = response.precio_kilo_actual;
      var precio_litro_actual = response.precio_litro_actual;
  
      // Realiza las operaciones necesarias con los precios obtenidos
  
      $("#precio_l").text("$ "+precio_litro_actual);
      $("#precio_k").text("$ "+precio_kilo_actual);
      
      console.log('Precio kilo actual:', precio_kilo_actual);
      console.log('Precio litro actual:', precio_litro_actual);
    },
    
    error: function(xhr, status, error) {
      // Ha ocurrido un error en la solicitud
      console.log(xhr.responseText);
    }
  });

  

    $("#myCarousel").carousel({
      touch: true // Permite el arrastre táctil en dispositivos móviles
    });

    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      autoPlay: 4000,
      singleItem:true,
      
    });

    // Obtener el día actual
    const fechaActual = new Date();
    const dia = fechaActual.getDay(); // 0 para domingo, 1 para lunes, ..., 6 para sábado

    // Restar los días necesarios para obtener el domingo actual
    const domingoActual = new Date(fechaActual);
    domingoActual.setDate(fechaActual.getDate() - dia);

    // Calcular el sábado de la semana siguiente
    const sabadoSiguiente = new Date(domingoActual);
    sabadoSiguiente.setDate(domingoActual.getDate() + 6);

    // Obtener los valores de los días y el mes
    const numeroLunes = domingoActual.getDate();
    const numeroDomingo = sabadoSiguiente.getDate();
    const mesLunes = domingoActual.toLocaleString('default', { month: 'long' });
    const mesDomingo = sabadoSiguiente.toLocaleString('default', { month: 'long' });
    const año = fechaActual.getFullYear();

    // Crear el texto a insertar en el elemento
    let texto = '';
    if (dia === 6) { // Si es sábado, calcular la semana anterior
      const domingoAnterior = new Date(domingoActual);
      domingoAnterior.setDate(domingoActual.getDate());
      const sabadoAnterior = new Date(sabadoSiguiente);
      sabadoAnterior.setDate(sabadoSiguiente.getDate());
      const numeroDomingoAnterior = domingoAnterior.getDate();
      const numeroSabadoAnterior = sabadoAnterior.getDate();
      const mesAnterior = domingoAnterior.toLocaleString('default', { month: 'long' });

      texto = `Válido del ${numeroDomingoAnterior} ${mesAnterior} hasta el ${numeroSabadoAnterior} ${mesAnterior} del ${año}`;
    } else { // Para otros días, utilizar la semana actual
      if (mesLunes === mesDomingo) {
        texto = `Válido del ${numeroLunes} al ${numeroDomingo} ${mesLunes} del ${año}`;
      } else {
        texto = `Válido del ${numeroLunes} ${mesLunes} al ${numeroDomingo} ${mesDomingo} del ${año}`;
      }
    }

    // Insertar el texto en el elemento con la clase "fecha_precio"
    const elementoFecha = document.querySelector('.fecha_precio');
    elementoFecha.textContent = texto;


  });

  $('#whatsapp_act').click(function() {
    window.open('https://wa.me/527711125428?text=Me%20gustaría%20más%20pedir%20más%20información.', '_blank');
  });
  
  $('#telefono_act').click(function() {
    window.open('tel:+527711125428', '_blank');
  });
  