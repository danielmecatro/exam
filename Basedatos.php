<?php

/**
 * 
 */
class Basedatos
{
	private $base_conexion;
	private $base_host;
	private $base_datos;
	private $base_usuario;
	private $base_clave;
	
	function __construct()
	{
		$this->base_host='localhost';
		$this->base_datos='prueba';
		$this->base_usuario='root';
		$this->base_clave='';
	}


public function conectar(){
	try {
		$this->base_conexion=new PDO("mysql:host=$this->base_host; dbname=$this->base_datos", "$this->base_usuario" , "$this->base_clave");

		
	} catch (Exception $e) {
		echo "erro";
		
	}

}

public function insertar($sentencia){
	$this->conectar();
	try {
		$sentencia=$this->base_conexion->prepare($sentencia);
		$sentencia->execute(array());
		
	} catch (Exception $e) {
		echo "error";
	}

		


}
public function actualizar($sentencia){
	$this->conectar();
	try {
		$sentencia=$this->base_conexion->prepare($sentencia);
		$sentencia->execute(array());
		
	} catch (Exception $e) {
		echo "error";
	}

	
}
public function imprimir($sentencia){
	$this->conectar();
	try {
		$sentencia=$this->base_conexion->prepare($sentencia);
		$sentencia->execute(array());
		$resultado=$sentencia->fetchALL(PDO::FETCH_ASSOC);
		return $resultado;
		
	} catch (Exception $e) {
		echo "error";
	}

		


}



}
