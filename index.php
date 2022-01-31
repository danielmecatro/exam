<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="crearplato.php" method="POST">
		
<tr>
	
	<td>nombre</td>
	<td>precio</td>
	<br>
</tr>
<tr>
	
<input type="text" name="nombre" value="" >
<input type="text" name="precio" value="" >
<input type="submit" name="" value="enviar" >
</tr>




	</form>


	<table>

		<tr>
			<td>comida</td>
			<td>precio</td>

        <?php
        require "comida.php";
        $mostrar=new comida();
        $mostrar=$mostrar->imprimirr();
        foreach($mostrar as $mostrarr):


          ?>
		</tr>
		<td><?php echo $mostrarr['nombre']  ?></td>
		<td><?php echo $mostrarr['precio']  ?></td>
		<td>
			<a href="pedido.php?nombre=<?php echo $mostrarr['nombre']  ?> & precio=<?php echo $mostrarr['precio']  ?>">
				<input type="button" name="" value="comprar"></a>
		</td>


		<?php
	endforeach;


		?>
		

	


	
</body>
</html>