<?php

$usuario= "root";
$clave= "";
$server= "localhost";
//$bdd = "prueba";
$bdd = "trabajo";

$cnx = new mysqli($server,$usuario,$clave,$bdd);

if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}else{
    //echo "funciono";
}