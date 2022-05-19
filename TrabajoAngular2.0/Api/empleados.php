<?php
require_once 'clases/empleados.class.php';
require_once 'clases/respuestas.class.php';

$obj_respuestas = new respuestas();
$obj_empleados = new empleados();

if($_SERVER['REQUEST_METHOD'] == 'GET'){

    if(isset($_GET['page'])){

        $pagina = $_GET['page'];
        $listado_empleados = $obj_empleados->listaEmpleados($pagina);
        header('Content-Type: application/json');
        echo json_encode($listado_empleados);
        http_response_code(200);

    }else if(isset($_GET['id'])){

        $id = $_GET['id'];
        $empleado = $obj_empleados->GetEmpleadosId($id);
        header('Content-Type: application/json');
        echo json_encode($empleado);
        http_response_code(200);
    }

}




?>