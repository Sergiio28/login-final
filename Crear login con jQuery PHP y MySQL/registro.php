<?php
// Declaramos en fichero encargado de realizar la conexión
require_once('db/conexion.php');
require_once('db/clase.php');
// Instancia el objeto da classe Login
// $objLogin = new Login();

// Finaliza la sessión del usuario
if (isset($_POST["name"], $_POST["username"], $_POST["contrasena"]) and $_POST["name"] !="" and $_POST["username"]!="" and $_POST["contrasena"]!="" ){

//traspasamos a variables locales, para evitar complicaciones con las comillas:
$nombre = $_POST["name"];
$username = $_POST["username"];
$contrasena = $_POST["contrasena"];

$sql_1="SELECT * FROM `usuario` WHERE  username= '".$username."'";
$resultado= $conectar->query($sql_1);
$match= mysqli_num_rows($resultado);

//Preparamos la orden SQL
if ($match==0) {
	$sql="INSERT INTO `usuario` (username, contrasena, nombres) VALUES ('$username','$contrasena','$nombre');";
	$insert = $conectar->query($sql) or die (mysqli_errno());
	echo 1;
}else{

	echo 0;
}
}

// if (mysqli_query($conectar, $sql)) {
//      echo "Te has registrado correctamente, haz tu'·'<a href='index.php'>login</a>'.'ya";
// }else {
//      echo "Error: " . $sql . "<br>" . mysqli_error($conectar);
// }
// }


