<?php
$conexion = mysqli_connect('localhost', 'root', '', 'agenda');
$sql = "select * from contacto";
$respuesta = mysqli_query($conexion, $sql);

echo "<div class='container mt-4'>
<table class='table table-sm'>
    <thead>
        <tr>
            <th scope='col'>#</th>
            <th scope='col'>Nombre</th>
            <th scope='col'>Apellido</th>
            <th scope='col'>Acciones</th>
        </tr>
    </thead>
    <tbody>";
        
while ($registro = mysqli_fetch_array($respuesta)) {
    $nombre = $registro["nombre"];
    $apellido = $registro["apellido"];
    $id = $registro["id"];
    echo "<tr>";
    echo "<td>$id</td>";
    echo "<td>$nombre</td>";
    echo "<td>$apellido</td>";
    echo "<td>           
        <a  href='modificar.php?id=$id' class='btn btn-outline-info'>Editar</a>
        <a  href='eliminar.php?id=$id' class='btn btn-outline-danger'>Eliminar</a>
        </td>";
    echo "</tr>";

  
}
echo   "</tbody>
</table>
</div>";
mysqli_close($conexion);
