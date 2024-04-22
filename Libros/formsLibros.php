<?php 
include("../Assets/navbar.php");
include ("../php/conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Materia = $_POST['materia'];
    $Libro = $_POST['libro'];
    $Grado = $_POST['grado'];
    
    if($Materia != "" && $Libro != "" && $Grado != "") {
        $sql_insert = "INSERT INTO libros (Materia, Libro, Grado) VALUES ('$Materia', '$Libro', '$Grado')";
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

        <input type="text" name="materia" placeholder="Materia" class="registro">
        <input type="text" name="libro" placeholder="Libro" class="registro">
        <input type="text" name="grado" placeholder="Grado" class="registro">
        <input type="submit" value="Registrar" id="registrar">
         <button class="boton">
        <a href="../Libros/Libros.php">Ver tabla de registros</a>
        </button>
    </form>
         
</div>

