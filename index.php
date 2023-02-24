<?php

include ('conexion.php');
$objeto = new Conexion;
$conexion = $objeto->conectar();
$consulta = "SELECT * FROM usuarios";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$datos = $resultado->fetchAll();

//var_dump($datos);


foreach ($datos as $dato){
    echo $dato['nombre']."<br>";
}

?>