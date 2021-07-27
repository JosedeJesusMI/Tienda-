<?php
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost", "root","", "login");

$consulta="SELECT* FROM admins where usuario='$usuario' and contrasena='$contrasena'";

$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:clogin/admin.php");
}else{
    ?>
    <?php
    include("login2.html");
    ?>
    <center><h4 align ="center"><font color="White" face="times new roman" >ERROR EN LA AUTENTICACION</font></h4></center> 
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);