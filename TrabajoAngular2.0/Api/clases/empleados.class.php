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
    private $Departamente ="";
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

    public function POST($json){
        $obj_respuestas = new respuestas();
        $datosArr = json_decode($json,true);
   
        if(!isset($datosArr['nombre']) || !isset($datosArr['dni']) || !isset($datosArr['correo'])){
            //LLAMAMOS A UN ERROR
            return $obj_respuestas->error_400();
            //SI RECIBIMOS LOS DATOS CORRECTOS PARA ACTUALIZAR
        }else{
            //ASIGNA VALOR A LA VARIABLES DESDE EL JSON QUE RECIBES
            $this->Nombre = $datosArr['nombre'];
            $this->DNI = $datosArr['dni'];
            $this->Correo = $datosArr['correo'];
            //VERIFICA SI TIENE DATOS EL JSON
            if(isset($datosArr['direccion'])){
                //LO ASIGNA
                $this->Direccion = $datosArr['direccion'];      
            }
            if(isset($datosArr['codigoPostal'])){
                //LO ASIGNA
                $this->CodigoPostal = $datosArr['codigoPostal'];      
            }
            if(isset($datosArr['telefono'])){
                //LO ASIGNA
                $this->Telefono = $datosArr['telefono'];      
            }
            if(isset($datosArr['genero'])){
                //LO ASIGNA
                $this->Genero = $datosArr['genero'];      
            }
            if(isset($datosArr['fechaNacimiento'])){
                //LO ASIGNA
                $this->FechaNacimiento = $datosArr['fechaNacimiento'];      
            }
            $resultado = $this->insertarDatos();
            //SI EL RESULTADO TIENE DATOS
            if($resultado){
                //OBTIENE EL VALOR DEL ARRAY DE RESPUESTAS
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
