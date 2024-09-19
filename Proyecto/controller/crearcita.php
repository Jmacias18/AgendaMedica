<?php

if ($_SERVER['REQUEST_METHOD']=="POST"){

	$fechac = $_POST['fecha'];
	$hora = $_POST['hora'];
	$NombreMed = $_POST['medico'];

    require_once("../model/claseconexionSA.php");
    $obj = new Conection();
    $resultado =$obj->insertcita($fechac,$hora,$NombreMed);
    echo json_encode(["estado"=>$resultado]);
}