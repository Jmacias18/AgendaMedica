<?php
if($_SERVER['REQUEST_METHOD']=="GET"){


  require_once("../model/claseconeccionClinica.php");
  $obj = new conection();
  $resultado = $obj->Medicos();
  echo json_encode($resultado);

}
