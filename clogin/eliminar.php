<?php
$conexion=mysqli_connect("localhost", "root", "", "login");
if(!$conexion){
    echo 'error';
}
$id=$_GET['id']; 


$eliminar = "DELETE from ropa where id='$id'";

$resultado = mysqli_query($conexion, $eliminar);

if($resultado){
    header("location:admin.php");
}else{
    ?>
    <?php
    include("admin.php");
    ?>
    <center><h4 align ="center"><font color="White" face="times new roman" >ERROR EN LA Eliminacion</font></h4></center> 
    <?php
}

mysqli_close($conexion);
?>