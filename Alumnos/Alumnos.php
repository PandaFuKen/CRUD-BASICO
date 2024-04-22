<link rel="stylesheet" href="../CSS/tablaalumnos.css">

<?php
include("../php/conexion.php");
$sql = "SELECT*FROM alumnos";
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
                <td><?php echo $fila['id_alumno']?></td>
                <td><?php echo $fila['Nombres']?></td>
                <td><?php echo $fila['Apellidos']?></td>
                <td><?php echo $fila['Correo']?></td>
                <td><?php echo $fila['Semestre']?></td>
                <td><?php echo $fila['Carrera']?></td>
                <td>
                    <a href="../Alumnos/editarAlumnos.php?id_alumno=<?php echo $fila ['id_alumno']?>"><img src="../IMG/editar.png" alt="" class="editar"></a>
                    <a href="../Alumnos/eliminarAlumnos.php?id_alumno=<?php echo $fila ['id_alumno']?>"><img src="../IMG/eliminar.png" alt="" class="eliminar"></a>
                </td>
                </tr>
          <?php }?>
        </tbody>
    </table>
</div>