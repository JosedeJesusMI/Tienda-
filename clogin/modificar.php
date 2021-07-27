<?php
$id=$_GET['id'];
$conexion=mysqli_connect("localhost", "root", "", "login");
$ropa = "SELECT * FROM ropa where id='$id'";
if(!$conexion){
    echo 'error';
}
?>

<title>administrador </title>
<!DOCTYPE html>
<body  style="background-color:#C6D1F5;">


    <center><H1><font face="times new roman" color="white">La Moda a tu Alcance</FONT></H1></center>
    <br><br>
    <center><table border="1" >
     <tr>
<div>
<td><font face="times new roman" color="white">Foto</font><br></td>
<td><font face="times new roman" color="white">id</font><br></td>
<td><font face="times new roman" color="white">titulo</font><br></td>
<td><font face="times new roman" color="white">precio</font><br></td>
<td><font face="times new roman" color="white">genero</font><br></td>
<td><font face="times new roman" color="white">descripcion</font><br></td>
<td><font face="times new roman" color="white">cantidad</font><br></td>
</div>
    </tr>
    <?php 
     $resultado = mysqli_query($conexion, $ropa);
    while($row=mysqli_fetch_assoc($resultado)){  ?>
<tr><td><img src="<?php echo $row["foto"];?>" width="50" height="50"/><br></td>
<form action="modificar2.php" method="post">
<td><input type="text" value="<?php echo $row["id"];?>" name="id"><br></td>
<td><input type="text" value="<?php echo $row["titulo"];?>" name="titulo"><br></td>
<td><input type="text" value="<?php echo $row["precio"];?>" name="precio"><br></td>
<td><input type="text" value="<?php echo $row["genero"];?>" name="genero"><br></td>
<td><input type="text" value="<?php echo $row["descripcion"];?>" name="descripcion"><br></td>
<td><input type="text" value="<?php echo $row["cantidad"];?>" name="cantidad"><br></td>
    </tr>
    
</table> <input type="submit" value="Modificar"/></form> </center><center>

<form action="admin.php" method="post"><input type="submit" value="Regresar"/></form>
    </center>
<?php  } ?>
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


    