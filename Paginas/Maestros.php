<link rel="stylesheet" href="../CSS/tablas.css">


<?php 
include ("../php/conexion.php");
$sql = "SELECT * FROM maestros";
$result = mysqli_query($conexion, $sql);
?>


<div class="contenedor-tabla">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Carrera</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php while($fila = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $fila['id_maestro']?></td>
                    <td><?php echo $fila['Nombres']?></td>
                    <td><?php echo $fila['Apellidos']?></td>
                    <td><?php echo $fila['Carrera']?></td>
                    <td>
                        <a href="">Editar</a>
                        <a href="">Eliminar</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
