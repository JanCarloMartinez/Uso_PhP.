<?php

ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

if ($_POST) {/* pregunta si el ususario envio datos en el formulrio, es el evento postblack*/
    $usuario = $_REQUEST["txtUsuario"];
    $clave = $_REQUEST["txtClave"];

    //Si usuario es distinto de vacio y clave es distindo de vacio, entonces:
   if ($usuario == "admin" && $clave == "123456") {
        header("Location: acceso-confirmado.php");
    } else {
        $mensaje = "Valido para usuarios registrados";
    }
}


?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Formulario</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
            <?php if (isset($mensaje)){?>
            <div class="alert alert-danger" role="alert">
                <?php echo  $mensaje; ?>
            </div>
                <?php } ?>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <form action="" method="POST">
                    <div class="py-3">
                        <label for="">Usuario: </label>
                        <input class="form-control" type="text" id="txtUsuario" name="txtUsuario" class="form-control">
                    </div>
                    <div class="py-3">
                        <label for="">Clave:</label>
                        <input class="form-control" type="password" name="txtClave" id="txtClave">
                    </div>
                    <div class="py-3">
                        <button class="btn btn-primary" type="submit">ENVIAR</button>
                    </div>
                </form>
            </div>
        </div>




    </div>
</body>

</html>