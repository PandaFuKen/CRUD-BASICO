<?php
include("../php/conexion.php");
$ides=$_GET['id_grupo'];
$Sql="DELETE FROM grupos where id_grupo='".$ides."'";
$result=mysqli_query($conexion,$Sql);
header("Location:../Grupos/formsGrupos.php");
?>