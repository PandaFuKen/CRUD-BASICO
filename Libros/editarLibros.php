<link rel="stylesheet" href="../CSS/editar.css">

<?php
include("../php/conexion.php");
$id4=$_GET['id_libro'];
$sql="SELECT*FROM libros where id_libro='".$id4."'";
$result=mysqli_query($conexion,$sql);

while($fila=mysqli_fetch_assoc($result)){

?>


<div class="contenedor-sticky">
    <form method="post" class="contenedor">
        <h1 class="Inicio">PERFIL</h1>
       <input type="hidden" name="id_libro" value="<?php echo $fila['id_libro']?>">
        <input type="text" name="materia" placeholder="Materia" class="registro" value="<?php echo $fila['Materia']?>">
        <input type="text" name="libro" placeholder="Libro" class="registro" value="<?php echo $fila['Libro']?>">
        <input type="text" name="grado" placeholder="Grado" class="registro" value="<?php echo $fila['Grado']?>">
        <input type="submit" value="Agregar" id="registrar">
    </form>
    <?php } ?>
</div>

<?php 
include("../php/conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se ha enviado un ID de maestro
    if(isset($_POST['id_libro'])) {
        $id_libro = $_POST['id_libro'];
        $Materia = $_POST['materia'];
        $Libro = $_POST['libro'];
        $Grado = $_POST['grado'];
        
        if($Materia != "" && $Libro != "" && $Grado != "") {
            // Construir la consulta de actualización
            $sql_update = "UPDATE libros SET Materia='$Materia', Libro='$Libro', Grado='$Grado' WHERE id_libro=$id_libro";
            $result_update = mysqli_query($conexion, $sql_update);
            
            if ($result_update) {
                // Redireccionar al usuario a la misma página después de procesar el formulario
                header("Location:../Libros/Libros.php");
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




