<link rel="stylesheet" href="../CSS/tablaalumnos.css">

<?php
include("../php/conexion.php");
$sql = "SELECT*FROM grupos";
$result = mysqli_query($conexion,$sql);
?>

<nav class="regresar">
 <button>
    <a href="../Maestros/formsMaestro.php">Regresar</a>
 </button>
</nav>

<div class="contenedor-tabla">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Correo</th>
                <th>Semestre</th>
                <th>Carrera</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php while($fila = mysqli_fetch_array($result)) {?> 
                <tr>
                <td><?php echo $fila['id_grupo']?></td>
                <td><?php echo $fila['Carrera']?></td>
                <td><?php echo $fila['Grado']?></td>
                <td><?php echo $fila['Turno']?></td>
                <td>
                    <a href="../Alumnos/editarAlumnos.php?id_alumno=<?php echo $fila ['id_alumno']?>"><img src="../IMG/editar.png" alt="" class="editar">Editar</a>
                    <a href="../Alumnos/eliminarAlumnos.php?id_alumno=<?php echo $fila ['id_alumno']?>"><img src="../IMG/eliminar.png" alt="" class="eliminar">Eliminar</a>
                </td>
                </tr>
          <?php }?>
        </tbody>
    </table>
</div>