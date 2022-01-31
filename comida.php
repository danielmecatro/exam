<?php

require "Basedatos.php";

class comida extends Basedatos
{
	public function crear($nombre,$valor){

		
		$query=("INSERT INTO comida(nombre,precio) VALUES('$nombre','$valor')" );
		$datos=$this->insertar($query);
		return $datos;

	}
	public function imprimirr(){

		$query=("SELECT*FROM comida" );
		$datos=$this->imprimir($query);
		return $datos;

	}
	public function comprar($array){
		$nombre=$array['nombre'];
		$estado=$array['estado'];
		$comida=$array['comida'];
		$cant=$array['cant'];
		$valor=$cant*$array['valor'];
		$direc=$array['direc'];
		$ciudad=$array['ciudad'];
		$telefono=$array['ciudad'];
		$db= new Basedatos();
		$query=("INSERT INTO pedido(nombre,fechahora,comida,cant,valor,direc,ciudad,telefono,estado) VALUES
		('$nombre',NOW(),'$comida','$cant','$valor','$direc','$ciudad','$telefono','$estado')" );
		$datos=$this->insertar($query);
		return $datos;
		echo $datos;
		echo $query;

	}
	public function pedido(){

		
		$query=("SELECT id,nombre,estado FROM pedido where estado='espera' " );
		$datos=$this->imprimir($query);
		return $datos;

	}
		public function cambioEstado($id,$estado){

		
		$query=("UPDATE pedido SET estado='$estado' where id='$id' " );
		$datos=$this->actualizar($query);
		return $datos;

	}
	public function pedidoo(){

		
		$query=("SELECT id,nombre,estado FROM pedido where estado='preparacion' " );
		$datos=$this->imprimir($query);
		return $datos;

	}
	public function reparto($id){

		$db= new Basedatos();
		$query=("UPDATE pedido SET estado='reparto',hreparto= NOW() where id='$id' " );
		$datos=$db->imprimir($query);
		return $datos;

	}
	public function pedi(){

		
		$query=("SELECT id,nombre,estado FROM pedido where estado='reparto' " );
		$datos=$this->imprimir($query);
		return $datos;

	}
	public function entrega($id){

		$db= new Basedatos();
		$query=("UPDATE pedido SET estado='entrega',hentrega= NOW() where id='$id' " );
		$datos=$db->imprimir($query);
		return $datos;

	}public function ped(){

		
		$query=("SELECT id,nombre,estado FROM pedido where estado='entrega' " );
		$datos=$this->imprimir($query);
		return $datos;

	}
}
	