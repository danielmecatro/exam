<?php

require "comida.php";
$idd=$_GET['iddd'];
$insertar = new comida();
$insertar=$insertar->reparto($idd);
header("Location:index.php");