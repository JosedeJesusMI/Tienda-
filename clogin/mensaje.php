<?php
$conexion=mysqli_connect("localhost", "root", "", "login");

$correo = $_POST["correo"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$telefono = $_POST["telefono"];
$direccion = $_POST["direccion"];
$observacion = $_POST["observacion"];

$insertar = "INSERT INTO mensaje(correo, nombre, apellido, telefono, direccion, observacion)
 values ('$correo','$nombre','$apellido','$telefono','$direccion','$observacion')";

$resultado = mysqli_query($conexion, $insertar);


if(!$resultado){
    echo 'error';
}
mysqli_close($conexion);
?>
<html>
    	<head><title>Registro</title></head>
    	<body style="background-color:#C6D1F5;">
<h1><div align="center"><font face="Algerian" color="white">Mesaje enviado</font></div></h1>

<center><form action="contacto.html">
        <input type="submit" value="Regresar" />
    </form></center>
	</body>
	</html>


