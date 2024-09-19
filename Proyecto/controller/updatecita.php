<?php
if ($_SERVER['REQUEST_METHOD']=="POST"){
    $idcita = $_POST['idcita'];
  

    require_once("../model/claseconexionSA.php");
    $obj = new Conection();
    $resultado = $obj->update($idcita);

    echo json_encode ($resultado);
}