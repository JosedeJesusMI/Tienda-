<?php
//mandamos nuestra id
$cerrar=$_GET['total'];

      //realizamos conexion
      $conexion=mysqli_connect("localhost", "root", "", "login");
      mysqli_set_charset($conexion, "utf8");

      if($cerrar >= 5){

        $copias = "SELECT * FROM copias";
        $resultado = mysqli_query($conexion, $copias);
        while($row=mysqli_fetch_assoc($resultado)){
            $id=$row["id"];
            $cantidad=$row["cantidad"];

            $eliminar = "DELETE from copias where id='$id'";
            $limpiar = mysqli_query($conexion, $eliminar);

            $eliminar2 = "DELETE from carrito where id='$id'";
            $limpiar2 = mysqli_query($conexion, $eliminar2);
            header("location:datos.php");
        }



        header("location:datos.php?total=$cerrar");
      }else if ($cerrar == 0){
            header("location:falla.html");
        
      }else if($cerrar == 2){
        $copias = "SELECT * FROM copias";
        $resultado = mysqli_query($conexion, $copias);
        if(!$resultado){
          header("location:../slogin/jose2.html");
        }else{
        while($row=mysqli_fetch_assoc($resultado)){
            $id=$row["id"];
            $cantidad=$row["cantidad"];

            $actualizar= "UPDATE ropa set cantidad='$cantidad' WHERE id='$id'";
            $resultado2 = mysqli_query($conexion, $actualizar);

            $eliminar = "DELETE from copias where id='$id'";
            $limpiar = mysqli_query($conexion, $eliminar);

            $eliminar2 = "DELETE from carrito where id='$id'";
            $limpiar2 = mysqli_query($conexion, $eliminar2);
            header("location:../slogin/jose2.html");
      }
      header("location:../slogin/jose2.html");
        
    }
  }
      ?>