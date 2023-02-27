$(document).ready(function(){
  // const formulario = document.querySelector('#crear-registro')

  $('#crear-registro').on('submit', function(e){
    e.preventDefault();
    
    var datos = $(this).serializeArray();
   console.log(datos);
    $.ajax({
        type: $(this).attr('method'),
        data: datos,
        url: $(this).attr('action'),
        dataType: 'json',
        success: function(data){
            console.log(data);
            respuesta = data;

          if(respuesta.respuesta == "exito"){
                  Swal.fire({
                  type: 'success',
                  title: 'Registro creado',
                  text: 'Informacion enviada correctamente'
                }) 
                document.getElementById("myForm").reset();
          }
          else{
            Swal.fire({
              type: 'error',
              title: 'Registro no creado',
              text: 'Informacion enviada correctamente'
            }) 
          }

        //     if(respuesta.respuesta == 'exito') {
             

        //       // mostrar Notificación
        //       mostrarNotificacion('Datos enviados exitosamente', 'correcto');

        //  } else {
        //       // Mostramos una notificacion
        //       mostrarNotificacion('Hubo un error...', 'error' );
        //  }
        }
    })
}); //Creacion de citas

// $('#crear-registro').on('submit', function(e){
//   e.preventDefault();
  
//   var datos = $(this).serializeArray();
//   $.ajax({
//       error: function(data){
//           console.log(data);
//           respuesta = data;
      
//               Swal.fire({
//                   type: 'success',
//                   title: 'Registro creado',
//                   text: 'Informacion enviada correctamente'
//                 }) 
//       }
//   })
// })

function mostrarNotificacion(mensaje, clase) {
  const notificacion = document.createElement('div');
  notificacion.classList.add(clase, 'notificacion', 'sombra');
  notificacion.textContent = mensaje;

  // formulario
  formulario.insertBefore(notificacion, document.querySelector('form legend'));

  // Ocultar y Mostrar la notificacion
  setTimeout(() => {
       notificacion.classList.add('visible');
       setTimeout(() => {
            notificacion.classList.remove('visible');           
            setTimeout(() => {
                 notificacion.remove();
            }, 500)
       }, 3000);
  }, 100);

}

});