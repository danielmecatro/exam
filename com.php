<?php

//$nom=$_POST['nomb'];
//echo $nom;
require "comida.php";

//$nomb=$_POST['nomb'];
//$fecha=$_POST['fecha'];
//$comida=$_POST['comida'];
//$cant=$_POST['cant'];
//$valor=$_POST['valor'];
//$direc=$_POST['direc'];
//$ciudad=$_POST['ciudad'];
//$telefono=$_POST['telefono'];
$estado="espera";
//$hora=$_POST['hora'];
$_POST['estado']=$estado;
$insertar=new comida();
$insertar->comprar($_POST);
header ("Location:index.php");

