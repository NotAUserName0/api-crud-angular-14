<?php
header("Access-Control-Allow-Origin:*");
require_once 'conexion.php';

$sql = "SELECT * FROM estudiantes";
$datos = $conexion->query($sql);

//var_dump($datos);
$result = array();
$i =0;
while($d = mysqli_fetch_assoc($datos)){
    $result[$i] = $d;
    $i++;
}

//var_dump($result);
    $json = json_encode($result);
    echo $json;

header('Content-Type: application/json');