<!-- Asi se define la fecha de el pais en donde vive-->

<?php
date_default_timezone_set("America/Bogota");
//date_default_timezone_set ("America/Bogota");
$nombre = "Jan Carlo Martinez Mendez";
$edad = "17";
//$aPeliculas = array("Darling in the Franxx", "Tonikaku kawaii", "Kawaii dake ja Nai Shikimori-san");
//print_r sirve para mostrar los php en la fuente de la pagina 
$aPeliculas =["Darling in the Franxx", "Tonikaku kawaii", "Kawaii dake ja Nai Shikimori-san"] //esta es otra forma de usar el peliculas


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha personal</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Ficha personal</h1>
            </div>
        </div>
        <div class="row">
            <div class="col_12">
                <table class="table table-hover border">
                    <tr>
                        <th>Fecha:</th>
                        <td> <?php echo date("d/m/Y") ?></td>
                    </tr>
                    <tr>
                        <th>Nombre y apellido:</th>
                        <td><?php echo $nombre ?></td>
                    </tr>
                    <tr>
                        <th>Edad:</th>
                        <td><?php echo $edad ?></td>
                    </tr>
                    <tr>
                        <th>Animes Favoritos:</th>
                        <td><?php echo $aPeliculas[0]; ?> <br>
                            <?php echo $aPeliculas[1]; ?> <br>
                            <?php echo $aPeliculas[2]; ?>
                        </td>
                    </tr>


                </table>
            </div>
        </div>




    </main>
</body>

</html>