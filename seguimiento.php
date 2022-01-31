<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>

<tr>
    <td>cliente espera</td>
    

<?php
require "comida.php";
$pedido=new comida();
$pedido=$pedido->pedido();
foreach($pedido as $pedidoo):


  ?>
</tr>
<td><?php echo $pedidoo['nombre']  ?></td>
<td><?php echo $pedidoo['id']  ?></td>

<td>
    <a href="hora.php?id=<?php echo $pedidoo['id']   ?> ">
        <input type="button" name="" value="seguimiento"></a>
</td>


<?php
endforeach;


?>
<table>

<tr>
    <td>cliente preparacion</td>
    

<?php
//require "comida.php";
$pedid=new comida();
$pedid=$pedid->pedidoo();
foreach($pedid as $pedidd):


  ?>
</tr>
<td><?php echo $pedidd['nombre']  ?></td>
<td><?php echo $pedidd['id']  ?></td>

<td>
    <a href="hora2.php?idd=<?php echo $pedidd['id']   ?> ">
        <input type="button" name="" value="seguimiento"></a>
</td>


<?php
endforeach;


?>
<table>

<tr>
    <td>cliente reparto</td>
    

<?php
//require "comida.php";
$pedi=new comida();
$pedi=$pedi->pedi();
foreach($pedi as $pedii):


  ?>
</tr>
<td><?php echo $pedii['nombre']  ?></td>
<td><?php echo $pedii['id']  ?></td>

<td>
    <a href="hora3.php?iddd=<?php echo $pedii['id']   ?> ">
        <input type="button" name="" value="seguimiento"></a>
</td>


<?php
endforeach;


?>
<table>

<tr>
    <td>cliente entrega</td>
    

<?php
//require "comida.php";
$ped=new comida();
$ped=$ped->ped();
foreach($ped as $pedd):


  ?>
</tr>
<td><?php echo $pedd['nombre']  ?></td>
<td><?php echo $pedd['id']  ?></td>

<td>
    <a href="hora4.php?idddd=<?php echo $pedd['id']   ?> ">
        <input type="button" name="" value="seguimiento"></a>
</td>


<?php

endforeach;


?>





</table>
    
</body>
</html>