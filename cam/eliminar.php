<?php

$id=$_GET['id'];
$conexion = mysqli_connect('localhost','root','','agenda');

$sql = "DELETE FROM contacto WHERE id='$id'";
$respuesta = mysqli_query($conexion, $sql);

header( "Location: index.php?opcion=listado");

?>

