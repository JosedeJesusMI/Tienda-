<?php
$conexion=mysqli_connect("localhost", "root", "", "login");
$carrito = "SELECT * FROM carrito";
$total=0;
if(!$conexion){
    echo 'error';
}
?>

<title>carrito </title>
<!DOCTYPE html>
<body  style="background-color:#C6D1F5;">


    <div id="header">
                <ul class="nav">
                    <li><a href="jose.html">Inicio</a></li>
                    <li><a href="catalogo.php">Mas vendido</a></li>
                    <li><a href="contacto.html">Contactanos</a></li>
                    <li><a href="confirmar.php?total=2">Cerrar Sesion</a></li>
    </div> 
    
    
    <br><br>
    <center><H1><font face="times new roman" color="white">La Moda a tu Alcance</FONT></H1></center>
    
<center><table   >
     <tr>
<div>
<td><font face="times new roman" color="white">Foto</font><br></td>
<td><font face="times new roman" color="white">id</font><br></td>
<td><font face="times new roman" color="white">titulo</font><br></td>
<td><font face="times new roman" color="white">precio</font><br></td>
<td><font face="times new roman" color="white">cantidad</font><br></td>
</div>
    </tr>
    <?php 
     $resultado = mysqli_query($conexion, $carrito);
   
    while($row=mysqli_fetch_assoc($resultado)){ 
        
    ?>
<tr><td><img src="<?php echo $row["foto"];?>" width="50" height="50"/><br></td>
<td><font face="times new roman" color="white"><?php echo $row["id"];?></font><br></td>
<td><font face="times new roman" color="white"><?php echo $row["titulo"];?></font><br></td>
<td><font face="times new roman" color="white">$<?php echo $row["precio"];?></font><br></td>
<td><font face="times new roman" color="white"><?php echo $row["cantidad"];?> unidades</font><br></td>

<?php

$total=$total+ $row["precio"];

?>

<td><form action="menos.php?menos=<?php echo $row["id"];?>" method="post"><input type="submit" value=" - " /></form></td>
<td><form action="opcarrito2.php?mas=<?php echo $row["id"];?>" method="post"><input type="submit" value=" + " /></form></td>

<?php  } ?>

    </tr>
    <tr><tr><tr><tr><tr><td>
        <font face="times new roman" color="black">Total: $<?php echo $total; ?></font><br></td></tr>
</table>




        
		<b><h3 align ="center"><font color="white" face="times new roman" >Ingresa tu informacion</font></h3></b>
        <div align='center'>
        <form action="confirmar.php?total=<?php echo $total ?>" method="post">   
        <table border="1"><tbody>
        <tr><td><p><font color="0385DE" face="times new roman"  >Apellidos</font><input type="text" name="apellido"/></p></td>
        <td><p><font color="0385DE" face="times new roman"  >Nombre(s) </font><input type="text" name="nombre"/></p></td></tr>
        <tr><td><p><font color="0385DE" face="times new roman"  > Correo Electronico </font><input type="text" name="correo"/></p></td>
        <td><p><font color="0385DE" face="times new roman"  >Telefono</font><input type="text" name="telefono"/></p></td></tr>
		<td><p><font color="0385DE" face="times new roman"  >Numero de Tarjeta</font><input type="text" name="direccion"/></p></td>       
        <td><p><font color="0385DE" face="times new roman"  >Nip</font><input type="text" name="observacion"/></p></tr></td>    
    </table></tbody>
        </div>
        
        <center> <table>
        <td> <select>
                     <option >Metodo de Pago</option>
                     <option value="efectivo">Debito</option>
                     <option value="debito">Credito</option>
                     <option value="paypal">PayPal</option>
            </select></td>
       <td><input type="submit" value=" Comprar " /></form></td>
       <td><form action="catalogo.php" method="post"><input type="submit" value=" Seguir Comprando " /></form></td>
       </table>
       </center>
       
       
       
       
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


    