<?php
include '../Model/dataBase.php';

$sql = "SELECT * FROM alumnos ORDER BY nombre ASC";
$obj = new Conexion();
echo ($obj->get_json_rows($sql));
