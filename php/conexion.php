<?php 
$host = 'localhost';
$usuario = 'root';
$clave = '';
$bd = 'servidor';
$conexion = mysqli_connect($host,$usuario,$clave,$bd);
if ($conexion->connect_error) {
    die("Conexion fallida: " . $conexion->connect_error);
}

?>