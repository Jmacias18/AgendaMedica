<?php

if($_SERVER['REQUEST_METHOD']=="POST"){

    $email = $_POST['email'];
    $password = $_POST['password'];

    require_once('../model/claseconexionSA.php');
    $obj = new Conection();
    $obj = $obj->login($email,$password);

    echo json_encode(["estado" =>$obj]);
}

