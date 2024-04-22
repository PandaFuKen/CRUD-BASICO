<link rel="stylesheet" href="../CSS/editar.css">

<?php
include("../php/conexion.php");
$id3=$_GET['id_grupo'];
$sql="SELECT*FROM grupos where id_grupo='".$id3."'";
$result=mysqli_query($conexion,$sql);

while($fila=mysqli_fetch_assoc($result)){

?>


<div class="contenedor-sticky">
    <form method="post" class="contenedor">
        <h1 class="Inicio">PERFIL</h1>
       <input type="hidden" name="id_grupo" value="<?php echo $fila['id_grupo']?>">
        <input type="text" name="carrera" placeholder="Carrera" class="registro" value="<?php echo $fila['Carrera']?>">
        <input type="text" name="grado" placeholder="Grado" class="registro" value="<?php echo $fila['Grado']?>">
        <input type="text" name="turno" placeholder="Turno" class="registro" value="<?php echo $fila['Turno']?>">
        <input type="submit" value="Agregar" id="registrar">
    </form>
    <?php } ?>
</div>

<?php 
include("../php/conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se ha enviado un ID de maestro
    if(isset($_POST['id_grupo'])) {
        $id_grupo = $_POST['id_grupo'];
        $Carrera = $_POST['carrera'];
        $Grado = $_POST['grado'];
        $Turno = $_POST['turno'];
        
        if($Carrera != "" && $Grado != "" && $Turno != "") {
            // Construir la consulta de actualización
            $sql_update = "UPDATE grupos SET Carrera='$Carrera', Grado='$Grado', Turno='$Turno' WHERE id_grupo=$id_grupo";
            $result_update = mysqli_query($conexion, $sql_update);
            
           
            if ($result_update) {
                // Redireccionar al usuario a la misma página después de procesar el formulario
                header("Location:../Grupos/Grupos.php");
                exit();
            } else {
                echo "Error al actualizar usuario: " . mysqli_error($conexion);
            }
        } else {
            echo "Por favor, complete todos los campos del formulario";
        }
    } else {
        echo "No se proporcionó un ID de maestro para la actualización";
    }
}
?>




