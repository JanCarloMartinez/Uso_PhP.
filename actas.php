<?php 

ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

//definicion de array de alumnos
$aAlumnos = array();
$aAlumnos[] = array("nombre" => "Luis Eduardo Martinez", "aNotas" => array(9, 8));
$aAlumnos[] = array("nombre" => "Jan Carlo Mendez", "aNotas" => array(4, 9));
$aAlumnos[] = array("nombre" => "David SIlva", "aNotas" => array(57, 6));

function promediar($aNumeros){
    $suma = 0;
    $resultado = 0;
    foreach($aNumeros as $numero){
        $suma += $numero;
    }
    return $suma / count($aNumeros);
}

?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Actas</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center text-center py-5" >
                <h1>Actas</h1>
            </div>
        </div>
        <div class="row">
            <div class="col 12">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Alumno</th>
                            <th>Nota 1</th>
                            <th>Nota 2</th>
                            <th>Promedio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $pos = 0;
                        $sumPromedios = 0;
                        foreach ($aAlumnos as $alumnos):
                            $pos++;
                            $promedio = promediar($alumnos["aNotas"]);
                            $sumPromedios += $promedio;
                        ?>
                        <tr>
                            <td><?php echo $pos; ?></td>
                            <td><?php echo $alumno["nombre"];?></td>
                            <td><?php echo $alumno["aNotas"][0];?></td>
                            <td><?php echo $alumno["aNotas"][1];?></td>
                            <td><?php echo number_format($promedio, 2, "," , ".");?></td>
                        </tr>

                            <?php endforeach; ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </main>
</body>
</html> 