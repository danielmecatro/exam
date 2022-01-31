<?php

require "comida.php";
$id=$_GET['id'];
$insertar = new comida();
$insertar=$insertar->cambioEstado($id,'preparacion');
header("Location:index.php");
