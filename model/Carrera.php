<?php
require_once("../data/Conexion.php");

class Carrera {

	private $idCarrera;
	private $nombreCarrera;

	public function __construct() {}

	public function Carrera($idCarrera, $nombreCarrera) {
		$this->idCarrera = $idCarrera;
		$this->nombreCarrera = $nombreCarrera;
	}

	public function getIdCarrera() {
		return $this->idCarrera;
	}

	public function getNombreCarrera() {
		return $this->nombreCarrera;
	}

	public function getTodasLasCarreras() {
		$objConex = new Conexion();
		$sql = "SELECT * FROM Carrera";
		$result = $objConex->executeQuery($sql);

		return $result;
	}
}
?>
