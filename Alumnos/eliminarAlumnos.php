<?php
include ("../php/conexion.php");
$id2=$_GET['id_alumno'];
$sql="DELETE FROM alumnos where id_alumno='".$id2."'";
$result=mysqli_query($conexion,$sql);
header("Location:../Alumnos/formsAlumnos.php");
?>
