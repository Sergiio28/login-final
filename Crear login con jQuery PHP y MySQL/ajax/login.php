<?php
// Incluimos fichero de conexion
require_once('../db/conexion.php');
require_once('../db/clase.php');

// Instancia del objeto classe Login
$objLogin = new Login();

// Recuperando informacion del formulario
$username = $_POST['username'];
$contrasena = $_POST['contrasena'];

// Usuario corecto
if ($objLogin->logar($username, $contrasena)){
	echo false;
}
    // Retornando usuario falso
    
else{
	 echo 'Usuario y contraseña invalidas';
}
    // Retornando mensaje de error
   



?>
