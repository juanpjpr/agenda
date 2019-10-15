

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curso</title>
    <?php include 'css/bootstrap.html'; ?>
</head>

<body>
    <?php include 'componentes/navbar.html' ?>
    <?php include 'buscar.php'; ?>
    <?php include 'crearUsuario.php';  ?>
        <?php
    if (isset($_GET['opcion'])) {
        switch ($_GET['opcion']) {
            case '':
                include 'componentes/home.html';
                break;
            case 'crearUsuario':
                include 'componentes/crearUsuario.html';
                break;
            case 'about':
                include 'componentes/about.html';
                break;
            case 'buscar':
                include 'componentes/buscar.html';
                break;
            case 'listado':
                include 'listado.php';
                break;
        }
    }
    ?>

</body>

</html>