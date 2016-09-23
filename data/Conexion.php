<?php
class Conexion {

	private $usuario="u683335531_soom";
	private $clave="kuun-lan71279359";
	private $host="mysql.hostinger.com.ar";
	private $bdatos="u683335531_work1";
	private $conex="";

	public function __construct(){}

	public function makeConnection(){
		$this->conex=@mysql_connect($this->host, $this->usuario, $this->clave) or die ("Problema de conexion a la BD - Primera Etapa");
		mysql_select_db($this->bdatos, $this->conex) or die ("Problema de conexion a la BD - Segunda Etapa");
		mysql_set_charset('utf8', $this->conex);
	}

	public function executeTransaction($sql){
		$this->makeConnection();
		$resul=mysql_query($sql) or die("ERROR: ".$sql.mysql_error());
	}

	public function executeQuery($sql){
		$this->makeConnection();
		$relay=mysql_query($sql);
		return $relay;
	}
}
?>
