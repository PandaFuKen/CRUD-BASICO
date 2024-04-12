<link rel="stylesheet" href="../CSS/editar.css">

<?php
include("../php/conexion.php");
$id=$_GET['id_maestro'];
$sql="SELECT*FROM maestros where id_maestro='".$id."'";
$result=mysqli_query($conexion,$sql);

while($fila=mysqli_fetch_assoc($result)){

?>


<div class="contenedor-sticky">
    <form method="post" class="contenedor">
        <h1 class="Inicio">PERFIL</h1>
       <input type="hidden" name="id_maestro" value="<?php echo $fila['id_maestro']?>">
        <input type="text" name="nombres" placeholder="Nombres" class="registro" value="<?php echo $fila['Nombres']?>">
        <input type="text" name="apellidos" placeholder="Apellidos" class="registro" value="<?php echo $fila['Apellidos']?>">
        <input type="text" name="carrera" placeholder="Carrera" class="registro" value="<?php echo $fila['Carrera']?>">
        <input type="submit" value="Agregar" id="registrar">
    </form>
    <?php } ?>
</div>

<?php 
include("../php/conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se ha enviado un ID de maestro
    if(isset($_POST['id_maestro'])) {
        $id_maestro = $_POST['id_maestro'];
        $Nombres = $_POST['nombres'];
        $Apellidos = $_POST['apellidos'];
        $Carrera = $_POST['carrera'];
        
        if($Nombres != "" && $Apellidos != "" && $Carrera != "") {
            // Construir la consulta de actualización
            $sql_update = "UPDATE Maestros SET Nombres='$Nombres', Apellidos='$Apellidos', Carrera='$Carrera' WHERE id_maestro=$id_maestro";
            $result_update = mysqli_query($conexion, $sql_update);
            
            if ($result_update) {
                // Redireccionar al usuario a la misma página después de procesar el formulario
                header("Location:../Maestros/formsMaestro.php");
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




