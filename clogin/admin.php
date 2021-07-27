<?php
$conexion=mysqli_connect("localhost", "root", "", "login");
$ropa = "SELECT * FROM ropa";
if(!$conexion){
    echo 'error';
}
?>

<title>administrador </title>
<!DOCTYPE html>
<body  style="background-color:#C6D1F5;">


    <div id="header"><ul class="nav">
                    <li><a href="../login.html">Cerrar Sesion</a></li>
    </div> 
    
    
    <br><br>
    <center><H1><font face="times new roman" color="white">La Moda a tu Alcance</FONT></H1></center>
    <div id="header"><ul class="nav">
    <li><a href="agregar.php">Nuevo Producto</a></li>
    </div> 
<center><table border="1" align="center" >
     <tr>
<div>
<td><font face="times new roman" color="white">Foto</font><br></td>
<td><font face="times new roman" color="white">id</font><br></td>
<td><font face="times new roman" color="white">titulo</font><br></td>
<td><font face="times new roman" color="white">precio</font><br></td>
<td><font face="times new roman" color="white">genero</font><br></td>
<td><font face="times new roman" color="white">descripcion</font><br></td>
<td><font face="times new roman" color="white">cantidad</font><br></td>
<td><font face="times new roman" color="white">Eliminar</font><br></td>
<td><font face="times new roman" color="white">Modificar</font><br></td>
</div>
    </tr>
    <?php 
     $resultado = mysqli_query($conexion, $ropa);
    while($row=mysqli_fetch_assoc($resultado)){  ?>
<tr><td><img src="<?php echo $row["foto"];?>" width="50" height="50"/><br></td>
<td><font face="times new roman" color="white"><?php echo $row["id"];?></font><br></td>
<td><font face="times new roman" color="white"><?php echo $row["titulo"];?></font><br></td>
<td><font face="times new roman" color="white">$<?php echo $row["precio"];?></font><br></td>
<td><font face="times new roman" color="white"><?php echo $row["genero"];?></font><br></td>
<td><font face="times new roman" color="white"><?php echo $row["descripcion"];?></font><br></td>
<td><font face="times new roman" color="white"><?php echo $row["cantidad"];?> Unidades</font><br></td>
<td> <form action="eliminar.php?id=<?php echo $row["id"];?>" method="post"><input type="submit" value="Eliminar"/></form></td>
<td> <form action="modificar.php?id=<?php echo $row["id"];?>" method="post"><input type="submit" value="Modificar"/></form></td>

<?php  } ?>
    </tr>
     
</table></center>
<style type="text/css">
                
                * {
                    margin:4px;
                    padding:4px;
                }
                
                #header {
                    margin:auto;
                    width:200px;
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


    