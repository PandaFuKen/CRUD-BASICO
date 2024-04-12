<?php 
include("../Assets/navbar.php");
include ("../php/conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Nombres = $_POST['nombres'];
    $Apellidos = $_POST['apellidos'];
    $Correo = $_POST['correo'];
    $Semestre = $_POST['semestre'];
    $Carrera = $_POST['carrera'];

    
    
    if($Nombres != "" && $Apellidos != "" && $Correo != "" && $Semestre != "" && $Carrera) {
        $sql_insert = "INSERT INTO Alumnos (Nombres, Apellidos, Correo , Semestre , Carrera) VALUES ('$Nombres', '$Apellidos', '$Correo' ,'$Semestre' ,'$Carrera')";
        $result_insert = mysqli_query($conexion, $sql_insert);
        
        if ($result_insert) {
            // Redireccionar al usuario a la misma página después de procesar el formulario
            header("Location: {$_SERVER['REQUEST_URI']}");
            exit();
        } else {
            echo "Error al agregar usuario: " . mysqli_error($conexion);
        }
    } else {
        echo "Por favor, complete todos los campos del formulario";
    }
}
?>

<link rel="stylesheet" href="../CSS/Registros.css">

<div class="contenedor-sticky">
    <form method="post" class="contenedor">
        <h1 class="Inicio">Registro</h1>

        <input type="text" name="nombres" placeholder="Nombres" class="registro">
        <input type="text" name="apellidos" placeholder="Apellidos" class="registro">
        <input type="text" name="correo" placeholder="Correo" class="registro">
        <input type="text" name="semestre" placeholder="Semestre" class="registro">
        <input type="text" name="carrera" placeholder="Carrera" class="registro">    
        <input type="submit" value="Agregar" id="registrar">
    </form>
</div>

<?php include ("../Alumnos/Alumnos.php");?>
