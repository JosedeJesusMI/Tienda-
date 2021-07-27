<?php
      $conexion=mysqli_connect("localhost", "root", "", "login");
      mysqli_set_charset($conexion, "utf8");
      $ropa = "SELECT * FROM ropa where genero='mujer'";
      $ropa2 = "SELECT * FROM ropa where genero='hombre'";

    
     
?>


<title>Catalogo</title>
<!DOCTYPE html>
<body  style="background-color:#C6D1F5;">


    <div id="header">
                <ul class="nav">
                    <li><a href="jose.html">Inicio</a></li>
                    <li><a href="catalogo.php">Mas vendido</a></li>
                    <li><a href="contacto.html">Contactanos</a></li>
                    <li><a href="confirmar.php?total=2">Cerrar Sesion</a></li>
    </div> <br><br><br>
    <center><H1><font face="times new roman" color="white">La Moda a tu Alcance</FONT></H1></center>
    
    <div align="right"> <a href="comprar.php"><img src="../imagenes/paginas/carrito.jpg" width="65"></a></div>
		
    
<table ><td>

<?php $resultado = mysqli_query($conexion, $ropa);
	while($row=mysqli_fetch_assoc($resultado)){
        ?>
<table >
<td>
<div>
<img src=" <?php echo $row["foto"];?>" width="300" height="300"/><br>
<font face="times new roman" color="white">Codigo: <?php echo $row["id"];?></font><br>
<font face="times new roman" color="white">Titulo: <?php echo $row["titulo"];?></font><br>
<font face="times new roman" color="white">Precio: $<?php echo $row["precio"];?></font><br>
<font face="times new roman" color="white">Genero: <?php echo $row["genero"];?></font><br>
<font face="times new roman" color="white">Descripcion: <?php echo $row["descripcion"];?> </font><br>
<font face="times new roman" color="white">Disponibles: <?php echo $row["cantidad"];?> unidades</font>
<center><table><div>
<td><tr><form action="directo.php?idc=<?php echo $row["id"];?>" method="post"><input type="submit" value="Comprar" /></form></tr></td>
<td><tr><form action="opcarrito.php?idc=<?php echo $row["id"];?>" method="post"><input type="submit" value="Agregar al Carrito" /></form></tr></td>
</div></table></center>
</div>
</td>
</table>
<?php  }?>

<td>

<?php 
    $resultado2 = mysqli_query($conexion, $ropa2);
        while($row2=mysqli_fetch_assoc($resultado2)){
        ?>
<table ><td><div>
<img src=" <?php echo $row2["foto"];?>" width="300" height="300"/><br>
<font face="times new roman" color="white">Codigo: <?php echo $row2["id"];?></font><br>
<font face="times new roman" color="white">Titulo: <?php echo $row2["titulo"];?></font><br>
<font face="times new roman" color="white">Precio: $<?php echo $row2["precio"];?></font><br>
<font face="times new roman" color="white">Genero: <?php echo $row2["genero"];?></font><br>
<font face="times new roman" color="white">Descripcion: <?php echo $row2["descripcion"];?> </font><br>
<font face="times new roman" color="white">Disponibles: <?php echo $row2["cantidad"];?> unidades</font>
<center><table><div>
<td><tr><form action="directo.php?idc=<?php echo $row2["id"];?>" method="post"><input type="submit" value="Comprar" /></form></tr></td>
<td><tr><form action="opcarrito.php?idc=<?php echo $row2["id"];?>" method="post"><input type="submit" value="Agregar al Carrito" /></form></tr></td>
</div></table></center>
</div>
</td>
</table>
<?php  }?>

</td></table>

    
            

    
    <br><br>
    
    <center><table>
     <td><tr>
            <A HREF="terminos.html">Terminos y condiciones</A>    
            <A HREF="privacidad.html">Politicas de Privacidad</A>    
            <A HREF="devolucion.html">Politicas de Devolucion</A>
            </tr></td>
            
            <td><P><a href="https://www.google.com.mx/maps/place/Av.+Carlos+Hank+Gonz%C3%A1lez+50,+Fuentes+de+Arag%C3%B3n,+55210+Ecatepec+de+Morelos,+M%C3%A9x./@19.5137469,-99.0388858,17z/data=!3m1!4b1!4m5!3m4!1s0x85d1fabd7107220d:0x1fcdd7ed297bb1a!8m2!3d19.5137419!4d-99.0366971"><img src="../imagenes/paginas/mapa.png" width="50"></a></p></td>
            <td><P><a href="https://www.facebook.com/josedejesus.munozislas.7/"><img src="../imagenes/paginas/facebook.png" width="50"></a></p></td>
            <td><P><a href="https://www.instagram.com/josedejesus.munozislas.7/?hl=es-la"><img src="../imagenes/paginas/instagram.jpg" width="50"></a></p></td>
            
            </table></tbody></center>
    </body>
    </html>
    
    <style type="text/css">
                
                * {
                    margin:4px;
                    padding:4px;
                }
                
                #header {
                    margin:auto;
                    width:500px;
                    font-family:times new roman, Helvetica, sans-serif;
                }
                
                ul, ol {
                    list-style:none;
                }
                
                .nav > li {
                    float:left;
                }
                
                .nav li a {
                    background-color:#F1F6F7;
                    color:#0037F2;
                    text-decoration:none;
                    padding:10px 12px;
                    display:block;
                }
                
                .nav li a:hover {
                    background-color:#9AABE5;
                }
                
                .nav li ul {
                    display:none;
                    position:absolute;
                    min-width:140px;
                }
                
                .nav li:hover > ul {
                    display:block;
                }
                
                .nav li ul li {
                    position:relative;
                }
                
                .nav li ul li ul {
                    right:-140px;
                    top:0px;
                }
                
            </style>

















