<?php

if ($_SERVER['REQUEST_METHOD']=="GET"){

    require_once("../model/claseconexionSA.php");
    $obj = new Conection();
    $resultado =$obj->consultarcita();
    echo json_encode($resultado);
}

