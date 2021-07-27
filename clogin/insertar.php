<?php
$conexion=mysqli_connect("localhost", "root", "", "login");
if(!$conexion){
    echo 'error';
}
$id=$_POST['id']; 
$titulo=$_POST['titulo'];
$precio=$_POST['precio'];
$genero=$_POST['genero'];
$descripcion=$_POST['descripcion'];
$cantidad=$_POST['cantidad'];

$nombre_imagen=$_POST['foto'];
 
$insertar = "INSERT INTO ropa (id , titulo, precio, genero, descripcion, cantidad, foto) 
values ('$id','$titulo','$precio','$genero','$descripcion','$cantidad','	
../imagenes/$nombre_imagen')";

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

<center><form action="admin.php">
        <input type="submit" value="Regresar" />
    </form></center>
	</body>
	</html>
