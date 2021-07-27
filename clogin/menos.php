<?php
//mandamos nuestra id
$idc=$_GET['menos'];

      //realizamos conexion
      $conexion=mysqli_connect("localhost", "root", "", "login");
      mysqli_set_charset($conexion, "utf8");

      //hacemos consulta que mandara informacion
      $ropa = "SELECT * FROM ropa where id='$idc'";
      $resultado = mysqli_query($conexion, $ropa);
      //les mandamos la informacion
      while($row=mysqli_fetch_assoc($resultado)){
      $id= $row["id"];
      $titulo= $row["titulo"];
      $precio=$row["precio"];
      $cantidadropa= $row["cantidad"]+1;
      $nombre_imagen= $row["foto"];
      }
      
      //realizamos para que no se pase de 0
      //
      //if($comp == $cantidadropa){
      //  
      //}else{
      //le decimos que cree nuestra variable que llevara el conteo
      
      $carrito = "SELECT * FROM carrito where id='$idc'";
      $resultado2 = mysqli_query($conexion, $carrito);
      $cantidad=1;
      while($row2=mysqli_fetch_assoc($resultado2)){
      $cantidad=$row2["cantidad"]-1;
      $precio2=$row2["precio"];
      }
      $comp=0;
      if($comp == $cantidad){

        $eliminar = "DELETE from carrito where id='$idc'";
        $resultadoel = mysqli_query($conexion, $eliminar);
        
        $actualizar= "UPDATE carrito set precio='$precio2', cantidad='$cantidad' WHERE id='$id'";
        $resultado = mysqli_query($conexion, $actualizar);

        $actualizarropa= "UPDATE ropa set cantidad ='$cantidadropa' WHERE id='$idc'";
     $resultadoropa = mysqli_query($conexion, $actualizarropa);

        header("location:comprar.php");
    }else{
   
     //en caso de que ya este el id solo agregara sumara los productos
        //$precio2=$precio2+$precio;
        $actualizar= "UPDATE carrito set precio='$precio2', cantidad='$cantidad' WHERE id='$id'";
        $resultado = mysqli_query($conexion, $actualizar);


     //y actualizamos los valores
     
     $actualizarropa= "UPDATE ropa set cantidad ='$cantidadropa' WHERE id='$idc'";
     $resultadoropa = mysqli_query($conexion, $actualizarropa);
     header("location:comprar.php");
  }  
?>
