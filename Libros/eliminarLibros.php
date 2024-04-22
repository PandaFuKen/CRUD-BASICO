<?php 
include("../php/conexion.php");
$id4=$_GET['id_libro'];
$sql="DELETE FROM libros where id_libro='".$id4."'";
$result = mysqli_query($conexion,$sql);
header("Location:../Libros/Libros.php");

?>