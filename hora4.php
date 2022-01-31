<?php

require "comida.php";
$idd=$_GET['idddd'];
$insertar = new comida();
$insertar->cambioEstado($id,'entrega');
header("Location:index.php");