<?php
include ("database.php");

/*if( $conex) {
	echo "Funciona";
} else {
	echo "No funciona";
}
 */

 if (isset($_POST['enviar'])) {
 	if (strlen($_POST['nombre']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['contenido']) >= 1) {
 	$nombre = trim($_POST['nombre']);
 	$email = trim($_POST['email']);
 	$contenido = trim($_POST['contenido']);
 	$fechareg = date("d/m/y");
 	$consulta = "INSERT INTO datos(nombre, email, contenido, fecha_reg) VALUES ('$nombre','$email','$contenido','$fechareg')";
 	$resultado = mysqli_query($conex,$consulta);
 	if ($resultado) {

 		echo '<script language="javascript">alert("Tus datos han sido enviados");</script>';

 	} else{
 
 		echo '<script language="javascript">alert("Ups ha ocurrido un problema");</script>';
 
		}

	}
 }

 if (isset($_POST['send'])) {
 	if (strlen($_POST['correo']) >= 1) {
 	$correo = trim($_POST['correo']);
 	$fecha = date("d/m/y");
 	$consulta = "INSERT INTO suscripcion(correo, fecha) VALUES ('$correo', '$fecha')";
 	$resultado = mysqli_query($conex,$consulta);
 	if ($resultado) {
 	
 		echo '<script language="javascript">alert("Tus datos han sido enviados");</script>';
 
 	} else{
 
 		echo '<script language="javascript">alert("Ups ha ocurrido un problema");</script>';

		}

	}
 }



?>