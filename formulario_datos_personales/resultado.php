<?php
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

if($_POST){
    $nombre = trim($_POST["txtNombre"]);
    $dni = trim($_POST["txtDni"]);
    $telefono = trim($_POST["txtTelefono"]);
    $edad = trim($_POST["txtEdad"]);

}


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Resultados</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Resultados de formulario</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>DNI</th>
                            <th>Telefono</th>
                            <th>Edad</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td> <?php echo $nombre; ?></td>
                            <td> <?php echo $dni; ?></td>
                            <td> <?php echo $telefono; ?></td>
                            <td> <?php echo $edad; ?></td>
                        </tr>

                    </tbody>
                </table>
                <a href="index.php" class="btn btn-primary float-end">VOLVER</a>
            </div>
        </div>
    </main>
</body>

</html>