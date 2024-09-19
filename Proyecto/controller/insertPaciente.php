<?php
if ($_SERVER['REQUEST_METHOD']== "POST"){
    $email = $_POST['correo'];
    $password = $_POST['pass'];
    $nombrepaciente = $_POST['nompac'];
    $fechanacimiento = $_POST['fechanac'];
    $sexo = $_POST['sex'];
    $tipoSangre = $_POST['tiposan'];
    $peso = $_POST['pes'];
    $estatura = $_POST['esta'];
    $domicilio = $_POST['domi'];
    $telefonocasa = $_POST['telcasa'];
    $telefonoCelular = $_POST['telcel'];
    $enfermedades = $_POST['enfer'];
    $alergias = $_POST['aler'];
    $cirugiasaccidentes = $_POST['coa'];

    echo "valores";
    echo $email, $password, $nombrepaciente, $fechanacimiento, $sexo, $tipoSangre,
    $peso, $estatura, $domicilio, $telefonocasa, $telefonoCelular, $enfermedades, $alergias, $cirugiasaccidentes;
    require_once("../model/claseconexionSA.php");
    $obj = new Conection();
    $resultado = $obj->insertpaciente($email,$password, $nombrepaciente, $fechanacimiento, $sexo, $tipoSangre,
    $peso, $estatura, $domicilio, $telefonocasa, $telefonoCelular, $enfermedades, $alergias, $cirugiasaccidentes);
    echo json_encode(["estado"=>$resultado]);
}

