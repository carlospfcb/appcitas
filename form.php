<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <!-- Sweetalert -->
    <link rel="stylesheet" href="assets/css/sweetalert2.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
    <title>Contact us</title>
</head>
<body>
    <!-- header  -->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">WebSiteName</a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Page 1</a></li>
            <li><a href="#">Page 2</a></li>
            <li class="active"><a href="form.html">Contactanos</a></li>
          </ul>
        </div>
      </nav>
      <!-- header  -->

        <!-- Form  -->
      <section class="container">
        <div class="panel panel-default col-lg-12 col-xs-12">
            <h2>Contactanos</h2>
            <div class="panel-body">
                <form id="crear-registro" method="post" action="modeloCitas.php">
                    <div class="form-group">
                      <label for="nombre" >Nombre completo:</label>
                      <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="telefono" >Telefono:</label>
                        <input type="number" class="form-control" id="telefono" name="telefono" required>
                      </div>
                    <div class="form-group">
                      <label for="correo">Correo:</label>
                      <input type="correo" class="form-control" id="correo" name="correo" required>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Comentario:</label>
                        <textarea class="form-control" name="comentario" id="" cols="30" rows="10" required></textarea>
                    </div>
                    <input type="hidden" name="registro" value="nuevo">
                    <input type="hidden" name="direccionIp" id="direccionIp">
                    <input type="hidden" name="isp" id="isp">
                    <button type="submit" class="btn btn-primary col-sm-12 col-xs-12 btn-lg">Enviar</button>
                  </form>
            </div>
          </div>
        </section>
    <script src="assets/js/sweetalert2.all.min.js"></script>
</body>
</html>