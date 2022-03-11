<?php

if (isset($_GET['accion']) == 'buscar') {
    
    include '../Model/consultas.php';
    $b_nombre = $_POST['b_nombre'];
    $b_cedula = $_POST['b_cedula'];
    $resultado=buscar($b_nombre,$b_cedula);
    echo $resultado;
    
}