<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	require "comida.php";
	$nombre_plato=$_GET['nombre'];
	$valor=$_GET['precio'];

	?>
	<form action="com.php" method="POST">
		
<tr>
	<td>nombre</td>
	<td>comida</td>
	<td>cantidad</td>
	<td>valor unitario</td>
	<td>direccion</td>
	<td>ciudad</td>
	<td>telefono</td>

</tr>
<br>
<tr>
<input type="text" name="nombre" value="" >
<input type="text" name="comida" value="<?php echo $nombre_plato  ?>" >
<input type="text" name="cant" value="" >
<input type="text" name="valor" value="<?php echo $valor ?>" >
<input type="text" name="direc" value="" >
<input type="text" name="ciudad" value="" >
<input type="text" name="telefono" value="" >

<input type="submit" name="" value="comprar" >

</tr>

	</form>
	
</body>
</html>