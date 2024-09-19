<?php
if($_SERVER['REQUEST_METHOD']=="POST"){

$enfermedadAbuscar = $_POST['enfermedad'];
  require_once("../model/claseconeccionClinica.php");
  $obj = new conection();
  $resultado = $obj->enfermedadesparecidas($enfermedadAbuscar);
  echo json_encode($resultado);

}
