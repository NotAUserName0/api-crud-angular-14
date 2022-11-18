<?php
header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");

require_once 'conexion.php';

//var_dump($_GET);

if(!empty($_GET)){
    $sql = $conexion->prepare("DELETE FROM estudiantes WHERE id = ?");
    $resultado = $sql->execute([$_GET['id']]);
    //var_dump($resultado);
    $outPut=array();
    $outPut['res'] = ($resultado) ? 'Exito!' : 'Error!';
    echo json_encode($outPut);

}


header('Content-Type: application/json');