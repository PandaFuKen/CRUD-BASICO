<link rel="stylesheet" href="../CSS/editar.css">

<?php
include("../php/conexion.php");
$id2=$_GET['id_alumno'];
$sql="SELECT*FROM alumnos where id_alumno='".$id2."'";
$result=mysqli_query($conexion,$sql);

while($fila=mysqli_fetch_assoc($result)){

?>


<div class="contenedor-sticky">
    <form method="post" class="contenedor">
        <h1 class="Inicio">PERFIL</h1>
       <input type="hidden" name="id_alumno" value="<?php echo $fila['id_alumno']?>">
        <input type="text" name="nombres" placeholder="Nombres" class="registro" value="<?php echo $fila['Nombres']?>">
        <input type="text" name="apellidos" placeholder="Apellidos" class="registro" value="<?php echo $fila['Apellidos']?>">
        <input type="text" name="correo" placeholder="Correo" class="registro" value="<?php echo $fila['Correo']?>">
        <input type="text" name="semestre" placeholder="Semestre" class="registro" value="<?php echo $fila['Semestre']?>">
        <input type="text" name="carrera" placeholder="Carrera" class="registro" value="<?php echo $fila['Carrera']?>">
        <input type="submit" value="Agregar" id="registrar">
    </form>
    <?php } ?>
</div>

<?php 
include("../php/conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se ha enviado un ID de maestro
    if(isset($_POST['id_alumno'])) {
        $id_alumno = $_POST['id_alumno'];
        $Nombres = $_POST['nombres'];
        $Apellidos = $_POST['apellidos'];
        $Correo = $_POST['correo'];
        $Semestre = $_POST['semestre'];
        $Carrera = $_POST['carrera'];
        
        if($Nombres != "" && $Apellidos != "" && $Correo != "" && $Semestre != "" && $Carrera != "") {
            // Construir la consulta de actualización
            $sql_update = "UPDATE alumnos SET Nombres='$Nombres', Apellidos='$Apellidos', Correo='$Correo' , Semestre='$Semestre' , Carrera='$Carrera' WHERE id_alumno=$id_alumno";
            $result_update = mysqli_query($conexion, $sql_update);
            
            if ($result_update) {
                // Redireccionar al usuario a la misma página después de procesar el formulario
                header("Location:../Alumnos/formsAlumnos.php");
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




