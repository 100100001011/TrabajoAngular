<?php
require_once 'respuestas.class.php';
require_once 'conexion/conexion.php';

class empleados extends conexion{
    private $table = 'empleados';
    private $id_Empleado ="";
    private $Nombre ="";
    private $Apellido ="";
    private $Cedula ="";
    private $Provincia_1 ="";
    private $Fecha_Nacimiento ="0000-00-00";
    private $Email ="";
    private $Observaciones_1 ="";
    private $Fecha_ingreso ="0000-00-00";
    private $Cargo ="";
    private $Departamento ="";
    private $Provincia_2 ="";
    private $Sueldo ="";
    private $Jornada ="";
    private $Observaciones_2 ="";
    
    //TODOS LOS DATOS POR PAGINAS
    public function listaEmpleados($pagina = 1){
        $inicio = 0;
        $fin = 50;
        if($pagina > 1 ){
            $inicio = ($fin * ($pagina - 1 )) + 1;
            $fin = $fin * $pagina;
        }

        $query = "SELECT * FROM $this->table limit $inicio , $fin"; 
        $datos = parent::get_datos($query);
        return $datos;

    }

    //DATOS POR ID
    public function GetEmpleadosId($id){
        $query = "SELECT * FROM $this->table WHERE id_Empleado = $id";
        return parent::get_datos($query);
    }
    //INSERTAR
    public function POST($json){
        $obj_respuestas = new respuestas();
        $datosArr = json_decode($json,true);
   
        if(!isset($datosArr['Nombre']) || !isset($datosArr['Apellido']) || !isset($datosArr['Cedula'])){
            
            return $obj_respuestas->error_400();
            
        }else{
            $this->Nombre = $datosArr['Nombre'];
            $this->Apellido = $datosArr['Apellido'];
            $this->Cedula = $datosArr['Cedula'];
            if(isset($datosArr['Provincia_1'])){
                $this->Provincia_1 = $datosArr['Provincia_1'];      
            }
            if(isset($datosArr['Fecha_Nacimiento'])){
                $this->Fecha_Nacimiento = $datosArr['Fecha_Nacimiento'];      
            }
            if(isset($datosArr['Email'])){
                $this->Email = $datosArr['Email'];      
            }
            if(isset($datosArr['Observaciones_1'])){
                $this->Observaciones_1 = $datosArr['Observaciones_1'];      
            }
            if(isset($datosArr['Fecha_ingreso'])){
                $this->Fecha_ingreso = $datosArr['Fecha_ingreso'];      
            }
            if(isset($datosArr['Cargo'])){
                $this->Cargo = $datosArr['Cargo'];      
            }
            if(isset($datosArr['Departamento'])){
                $this->Departamento = $datosArr['Departamento'];      
            }
            if(isset($datosArr['Provincia_2'])){
                $this->Provincia_2 = $datosArr['Provincia_2'];      
            }
            if(isset($datosArr['Sueldo'])){
                $this->Sueldo = $datosArr['Sueldo'];      
            }
            if(isset($datosArr['Jornada'])){
                $this->Jornada = $datosArr['Jornada'];      
            }
            if(isset($datosArr['Observaciones_2'])){
                $this->Observaciones_2 = $datosArr['Observaciones_2'];      
            }
           
            $resultado = $this->insertarDatos();
            if($resultado){
                $respuesta = $obj_respuestas->response;
                $respuesta["result"] = array("pacienteId"=>$resultado);
                return $respuesta;
            }else{
                return $obj_respuestas->error_500();
            }
            

        }
    }

    private function insertarDatos(){
        
        $query ="INSERT INTO $this->table(DNI, Nombre, Direccion, CodigoPostal, Telefono, Genero, FechaNacimiento, Correo)"
        ." VALUES ('$this->DNI','$this->Nombre','$this->Direccion','$this->CodigoPostal','$this->Telefono','$this->Genero','$this->FechaNacimiento','$this->Correo')";
        
        //print($query);
        $resp = parent::InsertId($query);
        //echo $resp;
        if($resp){
            return $resp;
        }else{
            return 0;
        }

    }
    


}
