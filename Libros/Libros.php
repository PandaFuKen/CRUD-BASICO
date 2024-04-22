<link rel="stylesheet" href="../CSS/tablas.css">


<?php 
include ("../php/conexion.php");
$sql = "SELECT * FROM libros";
$result = mysqli_query($conexion, $sql);
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
                <th>Materia</th>
                <th>libro</th>
                <th>Grado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php while($fila = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $fila['id_libro']?></td>
                    <td><?php echo $fila['Materia']?></td>
                    <td><?php echo $fila['Libro']?></td>
                    <td><?php echo $fila['Grado']?></td>
                    <td>
                        <a href="../Libros/editarLibros.php?id_libro=<?php echo $fila['id_libro']?>"><img src="../IMG/editar.png" alt="" class="editar"></a>
                        <a href="../Libros/eliminarLibros.php?id_libro=<?php echo $fila['id_libro']?>"><img src="../IMG/eliminar.png" alt="" class="editar"></a> 
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
