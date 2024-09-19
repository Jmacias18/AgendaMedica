
   <?php

    /*permite realizar la conexion a la bd*/
    class conection
    {
        public $driver;
        public $host;
        public $user;
        public $password;
        public $database;
        public $conn;

        public function __construct()
        {

            $this->driver = "mysql";
            $this->host = "localhost";
            $this->user = "root";
            $this->password = "";
            $this->database = "clinicasanantonio";

            $this->get_conection();
        }

        public function get_conection()
        {
            $this->conn = new PDO($this->driver . ":" . "host=" . $this->host . ";" . "dbname=" . $this->database, $this->user, $this->password);

            if (!$this->conn) {
                echo "Error al conectar";
            } else {
                /*echo "Conexion Establecida";*/
            }
        }
        /*$obj=new conection();*/

        public function reporteCancelaciones()
        {

            $sql = "CALL pacientecitascanceladas()";
            $statement = $this->conn->prepare($sql);

            /*EJECUTA EL PROCEDIMIENTO Y ARROJA 1 O 0 SI SE EJECUTA CORRECTAMENTE*/

            if ($statement->execute()) {

                /*retorna los registros encontrados*/

                $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                return $result;
            }
        }


        public function enfermedadesparecidas($enfermdadAbuscar)
        {

            $sql = "CALL enfermedadesParecidas(?)";
            $statement = $this->conn->prepare($sql);

            $statement->bindParam(1,$enfermdadAbuscar);

            /*EJECUTA EL PROCEDIMIENTO Y ARROJA 1 O 0 SI SE EJECUTA CORRECTAMENTE*/

            if ($statement->execute()) {

                /*retorna los registros encontrados*/

                $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                return $result;
            }
        }
        public function CitasHoyMedico()
        {

            $sql = "CALL CitasHoyMedico()";
            $statement = $this->conn->prepare($sql);

            /*EJECUTA EL PROCEDIMIENTO Y ARROJA 1 O 0 SI SE EJECUTA CORRECTAMENTE*/

            if ($statement->execute()) {

                /*retorna los registros encontrados*/

                $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                return $result;
            }
        }
        public function filtroSexoOnombre ($nombreAbuscar,$sexoAbuscar)
        {

            $sql = "CALL filtroNombreySexo(?,?)";
            $statement = $this->conn->prepare($sql);

            $statement->bindParam(1,$nombreAbuscar);
            $statement->bindParam(2,$sexoAbuscar);

            /*EJECUTA EL PROCEDIMIENTO Y ARROJA 1 O 0 SI SE EJECUTA CORRECTAMENTE*/

            if ($statement->execute()) {

                /*retorna los registros encontrados*/

                $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                return $result;
            }
        }
        public function Medicos()
        {

            $sql = "CALL Medicos()";
            $statement = $this->conn->prepare($sql);

            /*EJECUTA EL PROCEDIMIENTO Y ARROJA 1 O 0 SI SE EJECUTA CORRECTAMENTE*/

            if ($statement->execute()) {

                /*retorna los registros encontrados*/

                $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                return $result;
            }
        }
    }
