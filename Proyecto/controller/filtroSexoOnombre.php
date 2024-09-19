<?php
if($_SERVER['REQUEST_METHOD']=="POST"){

$nombreAbuscar = $_POST['nombre'];
$sexoAbuscar = $_POST['sexo'];
  require_once("../model/claseconeccionClinica.php");
  $obj = new conection();
  $resultado = $obj->filtroSexoOnombre($nombreAbuscar,$sexoAbuscar);
  echo json_encode($resultado);

}
