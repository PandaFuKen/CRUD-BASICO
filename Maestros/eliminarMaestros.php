<?php
include ("../php/conexion.php");
$id=$_GET['id_maestro'];
$sql="DELETE FROM maestros where id_maestro='".$id."'";
$result=mysqli_query($conexion,$sql);
header("Location:../Maestros/formsMaestro.php");
?>
