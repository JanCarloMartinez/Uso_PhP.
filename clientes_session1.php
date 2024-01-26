<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
if (isset($_SESSION["listadoClientes"])) {
    //Si existe la variable session "listadoClientes" asigno su contenido a "aClientes"
    $aClientes = $_SESSION["listadoClientes"];
} else {
    $aClientes = array();
}

//pregunta si es postback sea para enviar o eliminar todos
if ($_POST) {
    //Si hace click en "ENVIAR" entonces:
    if (isset($_POST["btnEnviar"])) {
        $nombre = $_POST["txtNombre"];
        $dni = $_POST["txtDni"];
        $telefono = $_POST["txtTelefono"];
        $edad = $_POST["txtEdad"];

        //creamos un array que contendra el listado de clientes
        $aClientes[] = array(
            "nombre" => $nombre,
            "dni" => $dni,
            "telefono" => $telefono,
            "edad" => $edad
        );

        //Actualiza el contenido que contendra el listado de clientes
        $_SESSION["listadoClientes"] = $aClientes;
    }
    //Si hace click en eliminar
    if (isset($_POST["btnEliminar"])) {
        session_destroy();
        $aClientes = array();
    }
}
//pregunt si viene pos en la query string
if (isset($_GET["pos"]));
//Recupero el dato que viene desde la query string via get
$pos = $_GET["pos"];
//elimina la posicion de array indicada
unset($aClientes["$pos"]);
//Actualizo la variable de session con el array actualizado
$_SESSION["listadoClientes"] = $aClientes;
header("location: clientes_session.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">    <title>Listado de Clientes</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Listado de Clientes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-3 offset-2 me-5">
                <form action="" method="POST" class="form">
                    <div class="pb-3">
                        <label for="">Nombre</label>
                        <input type="text" id="txtNombre" name="txtNombre" class="form-control my-2" placeholder="Ingrese el nombre y apellido">
                    </div>
                    <div class="pb-3">
                        <label for="">DNI</label>
                        <input type="text" id="txtDni" name="txtDni" class="form-control my-2" placeholder="Ingrese su DNI">
                    </div>
                    <div class="pb-3">
                        <label for="">Telefono</label>
                        <input type="text" id="txtTelefono" name="txtTelefono" class="form-control my-2" placeholder="Ingrese su telefono">
                    </div>
                    <div class="pb-3">
                        <label for="">Edad</label>
                        <input type="text" id="txtEdad" name="txtEdad" class="form-control my-2" placeholder="Ingrese su edad">
                    </div>
                    <div>
                        <button type="submit" name="btnEnviar" class="btn btn-primary text-white">Enviar</button>
                    </div>

                    <div>
                        <button type="submit" name="btnEliminar" class=" bi bi-exclamation-triangle-fill" >Eliminar</button>
                        
                    </div>
                </form>
                <div class="col-6 ms-5">
                    <table class="table table-hover shadow border">
                        <thead>
                            <th>Nombre</th>
                            <th>DNI</th>
                            <th>Telefono</th>
                            <th>Edad</th>
                            <th>Acciones</th>
                        </thead>
                        <tbody>
                            <?php foreach ($aClientes as $pos => $clientes) : ?>
                                <tr>
                                    <td><?php echo $cliente["nombre"]; ?></td>
                                    <td><?php echo $cliente["dni"]; ?></td>
                                    <td><?php echo $cliente["telefono"]; ?></td>
                                    <td><?php echo $cliente["edad"]; ?></td>
                                    <td><a href="clientes_session.php?pos=<?php echo $pos; ?>"><i class="bi bi-exclamation-triangle-fill"></i></a></td>
                                </tr>
                            <?php endforeach; ?>
                            <!-- El foreach se puede manejar de dos formas. lo que esta en comillas es una forma y lo que esta fuera de las comillas es otra forma de realizarlo-->
                            <!--   <.?php "foreach (...):" { ?> -->
                            <!-- <.?php "endforeach;" } -->
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </main>

</body>

</html>