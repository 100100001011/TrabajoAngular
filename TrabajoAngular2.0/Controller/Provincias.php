<?php

if (isset($_GET['accion']) == 'provincia') {
    
    include '../Model/consultas.php';
    $resultado = provincias();
    echo $resultado;
    
}