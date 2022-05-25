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
        $empleado = $obj_empleados->GET_empleadosId($id);
        header('Content-Type: application/json');
        echo json_encode($empleado);
        http_response_code(200);
    }

}else if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $datosRecibidosJSON = file_get_contents("php://input");

    $datosArray = $obj_empleados->POST($datosRecibidosJSON);

     header('Content-Type: application/json');

     if(isset($datosArray["result"]["error_id"])){
         $respuestaCodigo = $datosArray["result"]["error_id"];
         http_response_code($respuestaCodigo);
     }else{
         http_response_code(200);
     }

     echo json_encode($datosArray);


}else if ($_SERVER['REQUEST_METHOD'] == 'PUT'){
    $datosRecibidosJSON = file_get_contents("php://input");
    $datosArray = $obj_empleados->PUT($datosRecibidosJSON);
   
    echo json_encode($datosArray);

}else if ($_SERVER['REQUEST_METHOD'] == 'DELETE'){
    $datosRecibidosJSON = file_get_contents("php://input");
    $datosArray = $obj_empleados->DELETE($datosRecibidosJSON);
    header('Content-Type: application/json');
    //==> ERRORES
    if(isset($datosArray["result"]["error_id"])){
        $respuestaCodigo = $datosArray["result"]["error_id"];
        http_response_code($respuestaCodigo);
    }else{
        http_response_code(200);
    }
    //<== ERRORES
    echo json_encode($datosArray);
}
