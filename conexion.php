<?php

   $server = "localhost";
   $usr = "root";
   $pass = "";
   $db = "estudiantes";

   //'localhost','root','','pruebal'

  $conexion = mysqli_connect($server,$usr,$pass,$db);
  mysqli_query($conexion,"SET NAMES 'utf8'");


?>