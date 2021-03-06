<?php

namespace Vehiculos;

//importando archivo
require_once 'VehiculoBase.php';
require_once 'GPSTrait.php';

//Clase hija 1
	class Auto extends VehiculoBase implements \Serializable {

	//Llamada Trait
		use GPSTrait;

	//metodo public
		public function movimiento(){
			echo $this->encendiendo() . '<br>';
			echo "Auto: Moviendose<br>";
		}

	//implementacion metodo abstract
		public function encendiendo(){
			return 'Auto: encendiendo';
		}

	//implementacion interfaz serialize
		public function serialize(){
			echo "Serializable<br>";
			return $this->propietario;
		}

	//implementacion interfaz unserialize
		public function unserialize($serialized){
			echo "unSerializable<br>";
			$this->propietario = $serialized;
		}

	}

?>
