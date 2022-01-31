<?php

require "comida.php";
$idd=$_GET['idd'];
$insertar = new comida();
$insertar=$insertar->cambioEstado($idd,'reparto');
header("Location:index.php");