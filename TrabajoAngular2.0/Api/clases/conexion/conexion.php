<?php


class conexion{
    private $server;
    private $user;
    private $password;
    private $database;
    private $port;
    private $cnx;

    //CONSTRUCTOR
    function __construct(){
        $lista_datos = $this->datosConexion();
        foreach($lista_datos as $i => $value){
            $this->server  = $value['server'];
            $this->user = $value['user'];
            $this->password = $value['password'];
            $this->database = $value['database'];
            $this->port = $value['port'];
        }
        $this->cnx = new mysqli($this->server,$this->user,$this->password,$this->database,$this->port);
        if($this->cnx->connect_errno){
            echo"fallo la conexion";
            die();
        }else{

        }

    }

    //FUNCION PARA OBTENER LOS DATOS DE LA BASE DEL ARCHIVO config
    private function datosConexion(){
        $direccion = dirname(__FILE__);
        $jsondata = file_get_contents($direccion . "/" . "config");
        return json_decode($jsondata, true);
    }

    //CONVERSION UTF-8
    private function utf8($array){
        array_walk_recursive($array,function(&$item,$key){
            if(!mb_detect_encoding($item,'utf-8',true)){
                $item = utf8_encode($item);
            }
        });
        return $array;
    }

    //GET
    public function get_datos($sql_query){
        $res = $this->cnx->query($sql_query);
        $ResArr = array();
        //var_dump($res);
        if($res->num_rows > 1){
            foreach ($res as $i){
                //GUARDA LA INFO EN EL ARRAY
                $ResArr[] = $i;
                //var_dump($i);
            }
        }else{
            foreach ($res as $i){
                //GUARDA LA INFO EN EL ARRAY
                $ResArr = $i;
                
            }
        }
        
        
        return $this->utf8($ResArr);
    }

    //PUT-DELETE
    public function noQuery($sql_query){
        $res = $this->cnx->query($sql_query);
        return $this->cnx->affected_rows;
    }

    //POST
    public function InsertId($sql_query){
        $res = $this->cnx->query($sql_query);
        $filas = $this->cnx->affected_rows;
        //VERIFICA EL NUMERO DE RESULTADOS
        if($filas >= 1){
            return $this->cnx->insert_id;
        }else{
            return 0 ;
        }
    }

    protected function encriptar($clave){
        return md5($clave);
    }

}

?>