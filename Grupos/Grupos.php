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
                <th>Carrera</th>
                <th>Grupo</th>
                <th>Turno</th>
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
                    <a href="../Grupos/editarGrupo.php?id_grupo=<?php echo $fila ['id_grupo']?>"><img src="../IMG/editar.png" alt="" class="editar"></a>
                    <a href="../Grupos/EliminarGrupos.php?id_grupo=<?php echo $fila ['id_grupo']?>"><img src="../IMG/eliminar.png" alt="" class="eliminar"></a>
                </td>
                </tr>
          <?php }?>
        </tbody>
    </table>
</div>