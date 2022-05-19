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
    


}
