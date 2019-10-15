<?php 
if(isset($_POST['nombre'])){
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];

    $conexion = mysqli_connect('127.0.0.1','root','', 'agenda');

    $sql = "INSERT INTO contacto (nombre,apellido) 
    VALUES ('$nombre', '$apellido')";
     
     if(!mysqli_query($conexion, $sql)){
        echo "<div class='container alert alert-danger mt-4' role='alert'>
       Contacto no creado
      </div>";
    } else{
        echo "<div class='container alert alert-success mt-4' role='alert'>
        Contacto creado
      </div>";
    }
  
}

