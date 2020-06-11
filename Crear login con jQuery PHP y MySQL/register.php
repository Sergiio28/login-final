<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Registro</title>
    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/css/sticky-footer-navbar.css" rel="stylesheet">
<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/jquery.form.js'></script>
<link rel="stylesheet" type="text/css" href="css/main.css" />
<script type="text/javascript">
        // inicia funcion cuando carga la página
        $(function($) {
            // Cuando envia desde formulário
            $('#frmRegister').submit(function() {
              contrasena=$('#contrasena').val();
              contrasena2=$('#contrasena2').val();
                // Limpiando los mensajes de error
                $('div.mensagem-erro').html('');
                // Mostrando carga
                $('div.loader').show();
                // Enviando informacion via AJAX
                $(this).ajaxSubmit(function(respuesta) {
                    // Si no hay error mostrar el siguiente archivo
                    if (contrasena==contrasena2)
                        // Redirecionando para o painel
                        window.location.href = 'index.php';
                    else
                    {
                        // Encondiendo la carga con hide()
                        
                        // Exibimos mensaje de error
                        $('div.mensagem-erro').html("Las contraseñas no coinciden");
                    }
                });
                // Retornando false
                return false;
            });
        });
       
        </script>
  </head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Registrate Gratis</h5>
          <form class="form-signin" id="frmRegister" action="registro.php" method="post">
            
              <div class="form-label-group">
                <input type="text" id="name" name="name" class="form-control" placeholder="Introduce tu correo" required autofocus>
                <label for="name">Tu nombre</label>
              </div>
              <div class="form-label-group">
                <input type="email" id="username" name="username" class="form-control" placeholder="Introduce tu correo" required autofocus>
                <label for="username">Correo electrónico</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="contrasena" name="contrasena" class="form-control" placeholder="Password" required>
                <label for="contrasena">Contraseña</label>
              </div>
              <div class="form-label-group">
                <input type="password" id="contrasena2" name="contrasena2" class="form-control" placeholder="Password2" required>
                <label for="contrasena2">Repite la contraseña</label>
              </div>
               <div class="custom-control mb-0 mensagem-erro">
                
              </div>
              
              <input  class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" value="Registrarme"></input>
              <div class="custom-control mb-1 mt-3">
                
                <a href="index.php">¿Ya tienes cuenta?</a>
              </div>
              <hr class="my-4">
              <!-- <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button> -->
            </form>
          </div>
        </div>
      </div>
    </div>
  </div> 



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
</body>
</html>
