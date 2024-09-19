<?php


class Conection {

    public $driver;
    public $host;
    public $user;
    public $password;
    public $database;
    public $conn;

    public function __construct(){

        $this->driver = "mysql";
        $this->host = "localhost";
        $this->user = "root";
        $this->password = "";
        $this->database = "clinicasanantonio";

        $this->get_conection();
    }

    public function get_conection(){

     $this->conn = new PDO($this->driver.":"."host=".$this->host.";"."dbname=".$this->database,$this->user,$this->password);
        if (!$this->conn){
        echo "error al conector";

                        }
        else{
        // echo  "conexion establecida"; 
        }
    }
    public function insertpaciente( $email ,$password ,$nompaciente ,$fechanac, $sexo, $tiposangre, $peso, $estatura, $domicilio, $telCasa, $TelCel, $enfermedades,
    $alergias, $cirugias_accidentes){

        $sql = "CALL insertpaciente(?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $statement = $this->conn->prepare($sql);
        $statement->bindParam(1,$email);
        $statement->bindParam(2,$password);
        $statement->bindParam(3,$fechanac);
        $statement->bindParam(4,$nompaciente);
        $statement->bindParam(5,$sexo);
        $statement->bindParam(6,$tiposangre);
        $statement->bindParam(7,$peso);
        $statement->bindParam(8,$estatura);
        $statement->bindParam(9,$domicilio);
        $statement->bindParam(10,$telCasa);
        $statement->bindParam(11,$TelCel);
        $statement->bindParam(12,$enfermedades);
        $statement->bindParam(13,$alergias);
        $statement->bindParam(14,$cirugias_accidentes);

     
        if($statement->execute()){
    
            return "PACIENTE REGISTRADO";
    
        }
        else{
    
            return "NO SE LOGRO EL REGISTRO";
        }
    
        }
function login($email,$password){
    $sql = "CALL loginpaciente(?,?)";
    $statement = $this->conn->prepare($sql);

    $statement->bindParam(1,$email);
    $statement->bindParam(2,$password);

    /* ejecuta el procedimeinto y arroja 1 o 0 si se ejecuto correctamente */

    if($statement->execute()){

        $count=$statement->rowCount();
        
        if($count){
            $cookie_name = "sesion";
        
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            $cookie_value = $result[0]['idpaciente'];
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 =  1 day
            return true;


        }
        else{
            return false;
        }
    }
}

public function consultarcita(){

    $idpaciente = $_COOKIE['sesion'];
    $sql= " CALL VerCitas(?)";
    $statement = $this->conn->prepare($sql);
    $statement->bindParam(1,$idpaciente);

    /*ejecuta el procedimiento y arroja 1 o 0 si se ejecuta correctamente*/ 
    if($statement->execute()){

    /* retorna los regristros encontrados*/ 
    $result = $statement->fetchALL(PDO::FETCH_ASSOC);
    return $result;
    }
}

public function insertcita($fechac,$hora,$NombreMed){
    $datos=$_COOKIE["sesion"];

    $ID=$datos;

$sql = "CALL InsertCita(?,?,?,?)";
$statement = $this -> conn -> prepare($sql);

$statement -> bindParam(1,$fechac);
$statement -> bindParam(2,$hora);
$statement -> bindParam(3,$ID);
$statement -> bindParam(4,$NombreMed);


if($statement -> execute()){

    return "Cita creada";
}
else{

    return "Cita no creada";
    }
}

public function update($idcita){
    $sql="CALL UpdateCancelarCita(?)";
    $statement = $this->conn->prepare($sql);

    $statement->bindParam(1,$idcita); /*agrega un parametro*/  


    /* ejecuta el procedimiento y arroja 1 o 0 si se ejecuto correctamente*/ 

    if ($statement->execute()){
        $count=$statement->rowCount();
        if($count){
            return true;
        }
        else{
            return false;
        }
    }
        else{
            return "error";
        }
    
}

   

}
$obj = new Conection();




