<?php
require_once("../data/Conexion.php");

class Asistente {

	private $fullName;
	private $rutAsistente;
	private $correoAsistente;
	private $carrera;
	private $contactoAsistente;

	public function __construct() {}

	public function Asistente($fullName, $rutAsistente, $correoAsistente, $carrera, $contactoAsistente) {
		$this->fullName = $fullName;
		$this->rutAsistente = $rutAsistente;
		$this->correoAsistente = $correoAsistente;
		$this->carrera = $carrera;
		$this->contactoAsistente = $contactoAsistente;
	}

	public function setFullName($fullName) {
		$this->fullName = $fullName;
	}

	public function setRutAsistente($rutAsistente) {
		$this->rutAsistente = $rutAsistente;
	}

	public function setCorreoAsistente($correoAsistente) {
		$this->correoAsistente = $correoAsistente;
	}

	public function setCarrera($carrera) {
		$this->carrera = $carrera;
	}

	public function setContactoAsistente($contactoAsistente) {
		$this->contactoAsistente = $contactoAsistente;
	}

	public function insertAsistente() {
		$objConex = new Conexion();
		$sql = "INSERT INTO Asistente (`fullName`, `rutAsistente`, `correoAsistente`, `contactoAsistente`, `idCarrera`) VALUES('".$this->fullName."','".$this->rutAsistente."','".$this->correoAsistente."',".$this->contactoAsistente.",".$this->carrera.")";
		$result = $objConex->executeTransaction($sql);
		return $result;
	}
}
?>
