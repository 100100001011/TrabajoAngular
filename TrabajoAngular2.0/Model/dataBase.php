<?php

class Conexion
{
    private $cnx;
    private $usuario = "root";
    private $clave = "";
    private $server = "localhost";
    //$bdd = "prueba";
    private $bdd = "angularjs";

    //================================
    //CONTRUCTOR HACER LA CONEXION A LA BASE
    //================================
    public function __construct()
    {
        $Cusuario = $this->usuario;
        $Cserver = $this->server;
        $Cclave = $this->clave;
        $Cbdd = $this->bdd;

        $this->cnx = new mysqli($Cserver, $Cusuario, $Cclave, $Cbdd);

        if (mysqli_connect_errno()) {
            echo "error";
            printf("Falló la conexión: %s\n", mysqli_connect_error());
            exit();
        } else {
            //echo "funciono";
        }
    }
    //================================
    //
    //================================
    public function getConnection()
    {
        return $this->cnx;
    }

    public function get_json_rows($sql)
    {
        //$mysqli = $this->cnx;
        $mysqli = Conexion::getConnection();

        $resultado = $mysqli->query($sql);

        // Si hay un error en el SQL, este es el error de MySQL
        if (!$resultado) {
            return "class.Database.class: error " . $mysqli->error;
        }


        $i = 0;
        while ($row = $resultado->fetch_assoc()) {
            $registros[$i] = $row;
            $i++;
        };
        return json_encode($registros);
    }
}
