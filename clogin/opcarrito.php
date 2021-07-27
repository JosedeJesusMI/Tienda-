<?php
//mandamos nuestra id
$idc=$_GET['idc'];

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
      $cantidadropa= $row["cantidad"];
      $nombre_imagen= $row["foto"];
      }
      //realizamos para que no se pase de 0
      $comp=0;
      if($comp == $cantidadropa){
        header("location:warnin.html");
      }else{
      //le decimos que cree nuestra variable que llevara el conteo
      $carrito = "SELECT * FROM carrito where id='$idc'";
      $resultado2 = mysqli_query($conexion, $carrito);
      $cantidad=1;
      while($row2=mysqli_fetch_assoc($resultado2)){
      $cantidad=$row2["cantidad"]+1;
      $precio2=$row2["precio"];
      }
      //le insertamos los valores
      $insertar = "INSERT INTO carrito (id , titulo, precio, cantidad,  foto) 
        values ('$id','$titulo','$precio','$cantidad','$nombre_imagen')";
        $insertarcarrito = mysqli_query($conexion, $insertar); 

        $precio2=$precio2+$precio;

      if(!$insertarcarrito){
          //en caso de que ya este el id solo agregara sumara los productos
        
        $actualizar= "UPDATE carrito set precio='$precio2', cantidad='$cantidad' WHERE id='$id'";
        $resultado = mysqli_query($conexion, $actualizar);

      }

      //hacemos una copia de respaldo
      $copia = "INSERT INTO copias (id , cantidad) 
        values ('$id','$cantidadropa')";
        $ayuda = mysqli_query($conexion, $copia); 
     //y actualizamos los valores
     $resta=$cantidadropa-1;
     $actualizarropa= "UPDATE ropa set cantidad ='$resta' WHERE id='$idc'";
     $resultadoropa = mysqli_query($conexion, $actualizarropa);
     header("location:catalogo.php");
    }
?>
