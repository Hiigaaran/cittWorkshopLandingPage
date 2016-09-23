<?php
require_once("../model/Carrera.php");
require_once("../model/Asistente.php");

if (isset($_POST["inputNames"]) && $_POST["inputNames"] != "") {
  $names = $_POST["inputNames"];
}

if (isset($_POST["inputRUT"]) && $_POST["inputRUT"] != "") {
  $rut = $_POST["inputRUT"];
}

if (isset($_POST["inputCorreo"]) && $_POST["inputCorreo"] != "") {
  $correo = $_POST["inputCorreo"];
}

if (isset($_POST["CarreraSeleccionada"]) && $_POST["CarreraSeleccionada"] != 0) {
  $carrera = $_POST["CarreraSeleccionada"];
}

if (isset($_POST["inputContacto"]) && $_POST["inputContacto"] != "") {
  $contacto = $_POST["inputContacto"];
}

if (isset($_POST["btnRegistro"]) && $_POST["btnRegistro"] == "Registrarse") {
  $assistant = new Asistente();

  $assistant->setFullName($names);
  $assistant->setRutAsistente($rut);
  $assistant->setCorreoAsistente($correo);
  $assistant->setCarrera($carrera);
  $assistant->setContactoAsistente($contacto);
  //Validar el insert en caso de que falte uno o más campos en el formulario de ingreso.
  $result = $assistant->insertAsistente();
  if ($result == "") {
    header("Location: ../registroCorrecto.html");
  }else{
    header("Location: ../registroIncorrecto.html");
  }
}
?>
