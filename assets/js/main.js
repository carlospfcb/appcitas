$(document).ready(function(){
  

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
                document.getElementById("crear-registro").reset();
          }
          else{
            Swal.fire({
              type: 'error',
              title: 'Registro no creado',
              text: 'Informacion enviada correctamente'
            }) 
          }
        }
    })
}); 

$.getJSON('http://ip-api.com/json', function(ip){
  var data = {
    ip: ip.query,
    isp: ip.isp
  };
  var direccionIp = document.querySelector('#direccionIp');
  var isp = document.querySelector('#isp');
  isp.value=data.isp;
  direccionIp.value=data.ip;
  

});


});