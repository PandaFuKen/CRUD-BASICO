<?php 
include("../Assets/navbar.php");
include ("../php/conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Carrera = $_POST['carrera'];
    $Grado = $_POST['grado'];
    $Turno = $_POST['turno'];
    
    
    
    if($Carrera != "" && $Grado != "" && $Turno != "" ) {
        $sql_insert = "INSERT INTO grupos (Carrera, Grado, Turno ) VALUES ('$Carrera', '$Grado', '$Turno')";
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

        <input type="text" name="carrera" placeholder="Carrera" class="registro">
        <input type="text" name="grado" placeholder="Grado" class="registro">
        <input type="text" name="turno" placeholder="Turno" class="registro">
        <input type="submit" value="Agregar" id="registrar">
        <button>
            <a href="../Grupos/Grupos.php">Ver tabla de registros</a>
        </button>
    </form>
</div>


