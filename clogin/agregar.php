<title>Agregar </title>
<!DOCTYPE html>
<body  style="background-color:#C6D1F5;">
        
    <br><br>
    <center><H1><font face="times new roman" color="white">La Moda a tu Alcance</FONT></H1></center>

    <form action="insertar.php" method="post">
		<b><h3 align ="center"><font color="white" face="times new roman" >informacion del nuevo Producto</font></h3></b>
        <div align='center'><table border="1"><tbody>

        <tr><td><p><font color="0385DE" face="times new roman"  >ID producto</font><input type="text" name="id"/></p></td>
        <td><p><font color="0385DE" face="times new roman"  >Titulo</font><input type="text" name="titulo"/></p></td></tr>
        <tr><td><p><font color="0385DE" face="times new roman"  >Precio </font><input type="text" name="precio"/></p></td>
        <td><p><font color="0385DE" face="times new roman"  >Genero</font><input type="text" name="genero"/></p></td></tr>
		<td><p><font color="0385DE" face="times new roman"  >Descripcion</font><input type="text" name="descripcion"/></p></td>
	    <td><p><font color="0385DE" face="times new roman"  >Cantidad</font><input type="text" name="cantidad"/></p></tr></td>
        <td><input type='file' name='foto'></tr></td>
        
	</table></tbody><br><br>
    <input type="submit" value="Agregar" /></form><br><br>
    <form action="admin.php" method="post"><input type="submit" value="Cancelar" /></form>
        </div>
     