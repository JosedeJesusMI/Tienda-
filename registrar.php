<?php
$conexion=mysqli_connect("localhost", "root", "", "login");
if(!$conexion){
    echo 'error';
}
$usuario = $_POST["usuario"];
$contrasena = $_POST["contrasena"];
$nombre = $_POST["nombre"];
$direccion = $_POST["direccion"];

$insertar = "INSERT INTO usuarios(usuario , contrasena, nombre, direccion) values ('$usuario','$contrasena','$nombre','$direccion')";

$resultado = mysqli_query($conexion, $insertar);
if(!$resultado){
    echo 'error';
}
mysqli_close($conexion);
?>
<html>
    	<head><title>Registro</title></head>
    	<body style="background-color:#C6D1F5;">
<h1><div align="center"><font face="Algerian" color="white">Registrado Correctamente</font></div></h1>

<center><form action="login.html">
        <input type="submit" value="Inisiar Sesion" />
    </form></center>
	</body>
	</html>













	
