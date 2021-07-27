<?php
$id=$_POST['id'];
$titulo=$_POST['titulo'];
$precio=$_POST['precio'];
$genero=$_POST['genero'];
$descripcion=$_POST['descripcion'];
$cantidad=$_POST['cantidad'];

$conexion=mysqli_connect("localhost", "root", "", "login");

if(!$conexion){
    echo 'error';
}

$actualizar= "UPDATE ropa set titulo='$titulo', precio='$precio', 
genero='$genero', descripcion='$descripcion', cantidad='$cantidad' 
WHERE id='$id'";

$resultado = mysqli_query($conexion, $actualizar);


if($resultado){
    header("location:admin.php");
}else{
    ?>
    <?php
    include("modificar.php");
    ?>
    <center><h4 align ="center"><font color="White" face="times new roman" >ERROR EN LA AUTENTICACION</font></h4></center> 
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);