<?php
require "comida.php";

$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$insertar= new comida();
$insertar->crear($nombre,$precio);

header("Location:index.php");