<?php
require_once 'respuestas.class.php';
require_once 'conexion/conexion.php';

class empleados extends conexion
{
    private $table = 'empleados';
    private $id_Empleado = "";
    private $Nombre = "";
    private $Apellido = "";
    private $Cedula = "";
    private $Provincia_1 = "";
    private $Fecha_Nacimiento = "0000-00-00";
    private $Email = "";
    private $Observaciones_1 = "";
    private $Foto = "";
    private $Fecha_ingreso = "0000-00-00";
    private $Cargo = "";
    private $Departamente = "";
    private $Provincia_2 = "";
    private $Sueldo = "";
    private $Jornada = "";
    private $Observaciones_2 = "";

    //TODOS LOS DATOS POR PAGINAS
    public function listaEmpleados($pagina = 1)
    {
        $inicio = 0;
        $fin = 50;
        if ($pagina > 1) {
            $inicio = ($fin * ($pagina - 1)) + 1;
            $fin = $fin * $pagina;
        }

        $query = "SELECT * FROM $this->table limit $inicio , $fin";
        $datos = parent::get_datos($query);
        return $datos;
    }

    //DATOS POR ID
    public function GET_empleadosId($id){
        $query = "SELECT * FROM $this->table WHERE id_Empleado = $id";
        return parent::get_datos($query);
    }
    //INSERTAR
    public function POST($json){
        $obj_respuestas = new respuestas();
        $datosArr = json_decode($json, true);

        if (!isset($datosArr['Nombre']) || !isset($datosArr['Apellido']) || !isset($datosArr['Cedula'])) {
            //echo "error";
            return $obj_respuestas->error_400();
        } else {
            $this->Nombre = $datosArr['Nombre'];
            $this->Apellido = $datosArr['Apellido'];
            $this->Cedula = $datosArr['Cedula'];
            if (isset($datosArr['Provincia1'])) {
                $this->Provincia_1 = $datosArr['Provincia1'];
            }
            if (isset($datosArr['Fecha_Nacimiento'])) {
                $this->Fecha_Nacimiento = $datosArr['Fecha_Nacimiento'];
            }
            if (isset($datosArr['Email'])) {
                $this->Email = $datosArr['Email'];
            }
            if (isset($datosArr['Observaciones_1'])) {
                $this->Observaciones_1 = $datosArr['Observaciones_1'];
            }
            if (isset($datosArr['Foto'])) {
                $this->Foto = $datosArr['Foto'];
            }
            if (isset($datosArr['Fecha_ingreso'])) {
                $this->Fecha_ingreso = $datosArr['Fecha_ingreso'];
            }
            if (isset($datosArr['Cargo'])) {
                $this->Cargo = $datosArr['Cargo'];
            }
            if (isset($datosArr['Departamente'])) {
                $this->Departamente = $datosArr['Departamente'];
            }
            if (isset($datosArr['Provincia2'])) {
                $this->Provincia_2 = $datosArr['Provincia2'];
            }
            if (isset($datosArr['Sueldo'])) {
                $this->Sueldo = $datosArr['Sueldo'];
            }
            if (isset($datosArr['Jornada'])) {
                $this->Jornada = $datosArr['Jornada'];
            }
            if (isset($datosArr['Observaciones_2'])) {
                $this->Observaciones_2 = $datosArr['Observaciones_2'];
            }

            $resultado = $this->insertarDatos();
            //echo $resultado;

            if ($resultado) {
                $respuesta = $obj_respuestas->response;
                $respuesta["result"] = array("pacienteId" => $resultado);
                return $respuesta;
            } else {
                return $obj_respuestas->error_500();
            }
        }
    }

    private function insertarDatos(){
        $query = "INSERT INTO $this->table( Nombre, Apellido, Cedula, Provincia_1, Fecha_Nacimiento, Email, Observaciones_1, Foto, Fecha_ingreso, Cargo, Departamente, Provincia_2, Sueldo, Jornada, Observaciones_2) 
        VALUES ('$this->Nombre','$this->Apellido','$this->Cedula','$this->Provincia_1','$this->Fecha_Nacimiento','$this->Email','$this->Observaciones_1','$this->Foto','$this->Fecha_ingreso','$this->Cargo',
        '$this->Departamente','$this->Provincia_2','$this->Sueldo','$this->Jornada','$this->Observaciones_2')";

        $resp = parent::InsertId($query);
        if ($resp) {
            return $resp;
        } else {
            return 0;
        }
    }


    public function PUT($json){

        $obj_respuestas = new respuestas();

        $datosArr = json_decode($json, true);

        if ( !isset($datosArr['id_Empleado']) || !isset($datosArr['Nombre']) ) {

            return $obj_respuestas->error_400();
        } else {
            $this->id_Empleado = $datosArr['id_Empleado'];
            $this->Nombre = $datosArr['Nombre'];
            if (isset($datosArr['Apellido'])) {
                $this->Apellido = $datosArr['Apellido'];
            }
            if (isset($datosArr['Cedula'])) {
                $this->Cedula = $datosArr['Cedula'];
            }
            if (isset($datosArr['Provincia1'])) {
                $this->Provincia_1 = $datosArr['Provincia1'];
            }
            if (isset($datosArr['Fecha_Nacimiento'])) {
                $this->Fecha_Nacimiento = $datosArr['Fecha_Nacimiento'];
            }
            if (isset($datosArr['Email'])) {
                $this->Email = $datosArr['Email'];
            }
            if (isset($datosArr['Observaciones_1'])) {
                $this->Observaciones_1 = $datosArr['Observaciones_1'];
            }
            if (isset($datosArr['Foto'])) {
                $this->Foto = $datosArr['Foto'];
            }
            if (isset($datosArr['Fecha_ingreso'])) {
                $this->Fecha_ingreso = $datosArr['Fecha_ingreso'];
            }
            if (isset($datosArr['Cargo'])) {
                $this->Cargo = $datosArr['Cargo'];
            }
            if (isset($datosArr['Departamente'])) {
                $this->Departamente = $datosArr['Departamente'];
            }
            if (isset($datosArr['Provincia2'])) {
                $this->Provincia_2 = $datosArr['Provincia2'];
            }
            if (isset($datosArr['Sueldo'])) {
                $this->Sueldo = $datosArr['Sueldo'];
            }
            if (isset($datosArr['Jornada'])) {
                $this->Jornada = $datosArr['Jornada'];
            }
            if (isset($datosArr['Observaciones_2'])) {
                $this->Observaciones_2 = $datosArr['Observaciones_2'];
            }
            $resultado = $this->actualizarDatos();
            //var_dump($resultado);
            //if ($resultado) {
            if ($resultado >= 1) {
                $respuesta = $obj_respuestas->response;
                $respuesta["result"] = array("id_Empleado" => $this->id_Empleado);
                return $respuesta;
            } else {
                return $obj_respuestas->error_500();
            }
        }
    }

    private function actualizarDatos(){
        $query = "UPDATE $this->table SET Nombre='$this->Nombre',Apellido='$this->Apellido',Cedula='$this->Cedula',Provincia_1='$this->Provincia_1',Fecha_Nacimiento='$this->Fecha_Nacimiento',
        Email='$this->Email',Observaciones_1='$this->Observaciones_1',Foto='$this->Foto',Fecha_ingreso='$this->Fecha_ingreso',Cargo='$this->Cargo',Departamente='$this->Departamente',Provincia_2='$this->Provincia_2',
        Sueldo='$this->Sueldo',Jornada='$this->Jornada',Observaciones_2='$this->Observaciones_2' WHERE id_Empleado='$this->id_Empleado'";
        
        //var_dump($query);
        $resp = parent::noQuery($query);
        if($resp >= 1){
            return $resp;
        }else{
            return 0;
        }
        
    }

    public function DELETE($json){

        $obj_respuestas = new respuestas();
        $datosArr = json_decode($json,true);
 
        if(!isset($datosArr['id_Empleado'])){
            return $obj_respuestas->error_400();
        }else{
            $this->id_Empleado = $datosArr['id_Empleado'];

            $resultado = $this->EliminarDatos();

            
            if($resultado){
                $respuesta = $obj_respuestas->response;
                $respuesta["result"] = array("id_Empleado"=>$this->id_Empleado);
                return $respuesta;
            }else{
                return $obj_respuestas->error_500();
            }
            
        }
    }

    private function EliminarDatos(){
        $query = "DELETE FROM $this->table WHERE id_Empleado = '$this->id_Empleado'";

        $resp = parent::noQuery($query);

        if($resp >= 1){
            return $resp;
        }else{
            return 0;
        }
        
    }
}
