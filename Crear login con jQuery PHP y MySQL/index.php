<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Login</title>
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
            $('#frmLogin').submit(function() {
                // Limpiando los mensajes de error
                $('div.mensagem-erro').html('');
                // Mostrando carga
                $('div.loader').show();
                // Enviando informacion via AJAX
                $(this).ajaxSubmit(function(respuesta) {
                    // Si no hay error mostrar el siguiente archivo
                    if (!respuesta)
                        // Redirecionando para o painel
                        window.location.href = 'PanelControl.php';
                    else
                    {
                        // Encondiendo la carga con hide()
                        $('div.loader').hide();
                        // Exibimos mensaje de error
                        $('div.mensagem-erro').html(respuesta);
                    }
                });
                // Retornando false
                return false;
            });
        });
        </script>
  </head>

  <body>

    <header>
      <!-- Fixed navbar -->
      <!-- <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">BaulPHP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
            </li>  
            <li class="nav-item active">
              <a class="nav-link" href="PanelControl.php">Panel de Control</a>
            </li>  
                  
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Busqueda</button>
          </form>
        </div>
      </nav> -->
    </header>

    <!-- Begin page content -->


 

   <!-- Contenido --> 
<div class="container">
  
    <div class="row">
      <div class="col-6 text-center " >
        <h1 class="mt-5">Accede a tu cuenta</h1>
      <img class="pt-3" src="image/Logo-Informel.png" alt="Logo Informel Data">
 <hr class="mt-5 pt-5">
      </div>
      
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Entra</h5>
            <form class="form-signin" id="frmLogin" action="ajax/login.php" method="post">
            
 
              <div class="form-label-group">
                <input type="email" id="username" name="username" class="form-control" placeholder="Introduce tu correo" required autofocus>
                <label for="username">Correo electrónico</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="contrasena" name="contrasena" class="form-control" placeholder="Password" required>
                <label for="contrasena">Contraseña</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
              <div class="custom-control mb-3">
                
                <a href="register.php">¿No tienes cuenta?</a>
              </div>
              <input class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" value="Iniciar Sesión"></input>
              <!-- <hr class="my-4"> -->
              <!-- <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button> -->
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- <form id="frmLogin" action="ajax/login.php" method="post">
  <fieldset>
      <legend>Entrar</legend>
      <div class="loader" style="display: none;"><img src="image/loader.gif" alt="Cargando" /></div>
      <p><div class="mensagem-erro"></div></p>
        <div class="form-group">
    <label for="usuario">Usuario:</label>
    <input required type="text" class="form-control" id="username" name="username" placeholder="Ingrese su usuario" value="">
 	   </div>
        <div class="form-group">
    <label for="password">Contraseña:</label>
    <input required class="form-control" type="password" id="contrasena" name="contrasena"  placeholder="Ingrese su Contraseña" value="">
 	   </div>
  
<input class="btn btn-primary" type="submit" value="Iniciar Sesion">
             
  </fieldset>

		</form> -->

 <!-- Fin Contenido --> 
</div>
</div><!-- Fin row -->


</div><!-- Fin container -->
    <footer class="footer">
      
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>