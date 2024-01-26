<?php

ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

//preguntar si existe el archivo
if (file_exists("archivo.txt")) {
    // Vmos a leerlo y almacenamos el contenido de jsonClientes
    $jsonClientes = file_get_contents("archivo.txt");


    //Convertir jsonClientes en un array llamado aClientes
    $aClientes = json_decode($jsonClientes, true);

} else {
    //Si no existe el archivo

    //Creamos un a Clientes inicializando como un array vacio
    $aClientes = array();

}

$pos = isset($_GET["pos"]) && $_GET["pos"] >= 0 ? $_GET["pos"]:"";


if ($_POST) {
    $dni = trim($_POST["txtDni"]);
    $nombre = trim($_POST["txtNombre"]);
    $telefono = trim($_POST["txtTelefono"]);
    $correo = trim($_POST["txtCorreo"]);
    $nombreImagen = "";

    if($pos>=0){
        if($_FILES["archivo1"]["error"] === UPLOAD_ERR_OK) {
            $nombreAleatorio = date("Ymdhmsi"); //202210202002371010
                $archivo_tmp = $_FILES["archivo1"]["tmp_name"];
                $extension = pathinfo($_FILES["archivo1"]["name"], PATHINFO_EXTENSION);
                if ($extension == "jpg" || $extension == "jpeg" || $extension == "png") {
                    $nombreImagen = "$nombreAleatorio.$extension";
                    move_uploaded_file($archivo_tmp, "imagenes/$nombreImagen");
                }
            }
         //Eliminar la imagen anterior
         if($aClientes[$pos]["imagen"] != "" && file_exists("imagenes".$aClientes[$pos]["imagen"])){
             unlink("imagenes/".$aClientes[$pos]["imagen"]);
         }
        }else{
            //Mantener el nombreImagen que teniamos antes
           $nombreImagen = $aClientes[$pos]["imagen"];
         }

        //Actualizar
        $aClientes[$pos] = array("dni" => $dni,
                        "nombre" => $nombre,
                        "telefono" => $telefono,
                        "correo" => $correo,
                        "imagen" => $nombreImagen);

    }else{
        if($_FILES["archivo1"]["error"] === UPLOAD_ERR_OK) {
        $nombreAleatorio = date("Ymdhmsi"); //202210202002371010
            $archivo_tmp = $_FILES["archivo1"]["tmp_name"];
            $extension = pathinfo($_FILES["archivo1"]["name"], PATHINFO_EXTENSION);
            if ($extension == "jpg" || $extension == "jpeg" || $extension == "png") {
                $nombreImagen = "$nombreAleatorio.$extension";
                move_uploaded_file($archivo_tmp, "imagenes/$nombreImagen");
            }


        //Insertar
        $aClientes[] = array("dni" => $dni,
                            "nombre" => $nombre,
                            "telefono" => $telefono,
                            "correo" => $correo,
                            "imagen" => $nombreImagen);
    }



    //convertir el array de clienten a jsonClientes
    $jsonClientes = json_encode($aClientes);
    //Almacenar el string JsonClientes en un archivo .txt
    file_put_contents("archivo.txt", $jsonClientes);;

}


if(isset($_GET["do"]) && $_GET["do"] == "eliminar"){
    $pos = isset($_GET["pos"]) && $_GET["pos"] >= 0? $_GET["pos"]:"";

    //Eliminar del array aClientes la posicion a borrar unset()
    unset($aClientes[$pos]);

    //Convertir el array en Json
    $jsonClientes = json_encode( $aClientes);

    //Almacenar el Json en el archivo
    file_put_contents("archivo.txt" , $jsonClientes);

   header("Location: index.php");
   
   exit;

 

}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <title>Program</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Registro de clientes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div>
                        <label for="">DNI:</label>
                        <input type="text" name="txtDni" id="txtDni" class="form-control" required value="<?php echo isset($aClientes[$pos])? $aClientes[$pos]["dni"]:""; ?> ">
                    </div>
                    <div>
                        <label for="">NOMBRE:</label>
                        <input type="text" name="txtNombre" id="txtNombre" class="form-control" required value="<?php echo isset($aClientes[$pos])? $aClientes[$pos]["nombre"]: ""; ?>">
                    </div>
                    <div>
                        <label for="">TELÉFONO:</label>
                        <input type="text" name="txtTelefono" id="txtTelefono" class="form-control" required value="<?php echo isset($aClientes[$pos])? $aClientes[$pos]["telefono"]: ""; ?>">

                    </div>
                    <div>
                        <label for="">CORREO:</label>
                        <input type="text" name="txtCorreo" id="txtCorreo" class="form-control" required value="<?php echo isset($aClientes[$pos])? $aClientes[$pos]["correo"]:""; ?>">
                    </div>
                    <div class="pb-3 col-6">
                        <label for="archivo">Archivo adjunto</label>
                        <input type="file" name="archivo1" id="archivo1" accept=".jpg, .jpeg, .png">
                        <small class="d-block">Archivos admitidos: .jpg, .jpeg, .png</small>
                    </div>
                    <div class="pb-3">
                        <button type="submit" class="btn bg-primary text-white">Guardar</button>
                        <a href="index.php" class="btn btn-danger my-2">NUEVO</a>
                    </div>
                </form>
            </div>
            <div class="col-8">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th>Imagen</th>
                            <th>DNI</th>
                            <th>Nombre</th>
                            <th>Telefono</th>
                            <th>Correo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($aClientes as $pos => $cliente) : ?>
                            <tr>
                                <td>
                                    <?php if($cliente["imagen"] != "" ):?>
                                    <img src="imagenes/<?php echo $cliente["imagen"]; ?>" class="img-thumbnail">
                                        <?php endif; ?>
                                </td>

                                <td><?php echo $cliente["dni"]; ?></td>
                                <td><?php echo $cliente["nombre"]; ?></td>
                                <td><?php echo $cliente["telefono"]; ?></td>
                                <td><?php echo $cliente["correo"]; ?></td>
                                <td>
                                <a href="index.php?pos=<?php echo $pos; ?>&do=editar"><i class="fa-solid fa-pencil"></i></a>
                                <a href="index.php?pos=<?php echo $pos; ?>&do=eliminar"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>

</html> 