<?php
header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");

require_once 'conexion.php';

$json = file_get_contents('php://input'); // RECIBE EL JSON DE ANGULAR
 
$params = json_decode($json); // DECODIFICA EL JSON Y LO GUARADA EN LA VARIABLE

if(!empty($params)){
$sql = "INSERT INTO estudiantes VALUES(NULL,'$params->nombre','$params->grupo','$params->grado');";

$save = $conexion->query($sql);

$outPut=array();
        $outPut['res'] = ($save) ? 'Exito!' : 'Error!';
        echo json_encode($outPut);

}

header('Content-Type: application/json');