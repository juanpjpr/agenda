
<?php
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $conexion = mysqli_connect('localhost', 'root', '', 'agenda');
    $sql = "select * from contacto where id=$id";
    $respuesta = mysqli_query($conexion, $sql);
    $registro = mysqli_fetch_array($respuesta);
    if ($registro == NULL) {
        echo "<div class='container alert alert-danger mt-4' role='alert'>
    Contacto no encontrado
  </div>";
       
    } else {
        $nombre = $registro['nombre'];
        $apellido = $registro['apellido'];
        echo "<div class='container alert alert-success mt-4' role='alert'>
    " . $nombre . "   " . $apellido . "
  </div>";
    }
}
?>