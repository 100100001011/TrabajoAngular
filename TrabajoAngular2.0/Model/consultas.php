<?php

function Reporte()
{
    include '../Model/conexion.php';
    $consulta = "SELECT * FROM `empleados`";
    if ($resultado = $cnx->query($consulta)) {
        while ($obj = $resultado->fetch_object()) {

            $arr[] = array(
                'id' => $obj->id_Empleado,
                'Nom' => $obj->Nombre,
                'Ape' => $obj->Apellido,
                'Ced' => $obj->Cedula,
                'Prov1' => $obj->Provincia_1,
                'FechNa' => $obj->Fecha_Nacimiento,
                'Email' => $obj->Email,
                'Observ1' => $obj->Observaciones_1,
                'Foto' => $obj->Foto,
                'FechIng' => $obj->Fecha_ingreso,
                'Cargo' => $obj->Cargo,
                'Depart' => $obj->Departamente,
                'Prov2' => $obj->Provincia_2,
                'Sueldo' => $obj->Sueldo,
                'Jornada' => $obj->Jornada,
                'Observ2' => $obj->Observaciones_2,

            );
        }
        $resultado->close();
    }

    return json_encode($arr);
}


function insertar($nombres, $apellidos, $cedula, $provincia, $fec_na, $email, $observaciones1, $foto, $fec_ingre, $cargo, $departamento, $provincia2, $sueldo, $jornada, $observaciones2)
{
    include '../Model/conexion.php';


    $consulta = "INSERT INTO `empleados`(`Nombre`, `Apellido`, `Cedula`, `Provincia_1`, `Fecha_Nacimiento`,"
        . "`Email`, `Observaciones_1`, `Foto`, `Fecha_ingreso`, `Cargo`, `Departamente`, `Provincia_2`, `Sueldo`,"
        . "`Jornada`,`Observaciones_2`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $sql = $cnx->prepare($consulta);

    $sql->bind_param("sssssssssssssss", $nombres, $apellidos, $cedula, $provincia, $fec_na, $email, $observaciones1, $foto, $fec_ingre, $cargo, $departamento, $provincia2, $sueldo, $jornada, $observaciones2);
    $sql->execute();

    if ($cnx->prepare($consulta)) {
        echo 'OK';
    } else {
        echo "BAD";
    }

    $sql->close();
}




function buscar($buscarNombre, $buscarCedula)
{
    include '../Model/conexion.php';
    $arr = array();
    $consulta = "SELECT * FROM `empleados` LIMIT 20";
    if ($buscarNombre != '') {
        $consulta = "SELECT * FROM `empleados` WHERE `Nombre` LIKE '%$buscarNombre%' OR `Apellido` LIKE '%$buscarNombre%'";
    }
    if ($buscarCedula != '') {
        $consulta = "SELECT * FROM `empleados` WHERE `Cedula` LIKE '%$buscarCedula%'";
    }

    //echo $consulta;
    if ($resultado = $cnx->query($consulta)) {
        while ($obj = $resultado->fetch_object()) {

            $arr[] = array(
                'id' => $obj->id_Empleado,
                'Nom' => $obj->Nombre,
                'Ape' => $obj->Apellido,
                'Ced' => $obj->Cedula,
                'Prov1' => $obj->Provincia_1,
                'FechNa' => $obj->Fecha_Nacimiento,
                'Email' => $obj->Email,
                'Observ1' => $obj->Observaciones_1,
                'Foto' => $obj->Foto,
                'FechIng' => $obj->Fecha_ingreso,
                'Cargo' => $obj->Cargo,
                'Depart' => $obj->Departamente,
                'Prov2' => $obj->Provincia_2,
                'Sueldo' => $obj->Sueldo,
                'Jornada' => $obj->Jornada,
                'Observ2' => $obj->Observaciones_2,

            );
        }
        $resultado->close();
    }

    return json_encode($arr);
}


function actualizar($id, $nombres, $apellidos, $cedula, $provincia, $fec_na, $email, $observaciones1, $foto, $fec_ingre, $cargo, $departamento, $provincia2, $sueldo, $jornada, $observaciones2)
{
    include '../Model/conexion.php';


    $consulta = "UPDATE `empleados` SET `Nombre`= ?,`Apellido`= ?,"
        . "`Cedula`= ?,`Provincia_1`= ?,`Fecha_Nacimiento`= ?,`Email`= ?,"
        . "`Observaciones_1`=?,`Foto`=?,`Fecha_ingreso`=?,`Cargo`=?,"
        . "`Departamente`=?,`Provincia_2`=?,`Sueldo`=?,`Jornada`=?,"
        . "`Observaciones_2`=? WHERE `id_Empleado` = ?";
    $sql = $cnx->prepare($consulta);

    $sql->bind_param("ssssssssssssssss", $nombres, $apellidos, $cedula, $provincia, $fec_na, $email, $observaciones1, $foto, $fec_ingre, $cargo, $departamento, $provincia2, $sueldo, $jornada, $observaciones2, $id);

    $sql->execute();

    if ($cnx->prepare($consulta)) {
        echo 'OK';
    } else {
        echo "BAD";
    }

    $sql->close();
    //echo 'Insertado';
}



function provincias()
{
    include '../Model/conexion.php';
    $consulta = "SELECT * FROM `provincia`";
    if ($resultado = $cnx->query($consulta)) {
        while ($obj = $resultado->fetch_object()) {

            $arr[] = array(
                'nombre_provincia' => $obj->nombre_provincia,
            );
        }
        $resultado->close();
    }
    //var_dump($arr);
    return json_encode($arr);
}
