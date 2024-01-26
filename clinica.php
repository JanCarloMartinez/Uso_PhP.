<?php 

ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

$aPacientes[] =array(
    "dni" => "33.765.012",
    "nombre" => "Luis Martinez",
    "edad" => "45",
    "peso" =>"81.50"
);
$aPacientes[] =array(
    "dni" => "27.356.487",
    "nombre" => "Miguel Mendez",
    "edad" => "10",
    "peso" =>"48.10"
);
$aPacientes[] =array(
    "dni" => "45.655.891",
    "nombre" => "Digna Benavidez",
    "edad" => "50",
    "peso" =>"70.56"
);
$aPacientes[] =array(
    "dni" => "19.648.111",
    "nombre" => "Noe Moreno",
    "edad" => "67",
    "peso" =>"89.80"
);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Clinica</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col_12 text-center py-5">.
                <h1 class="py-5">Listado de Pacientes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th>DNI</th>
                            <th>NOMBRE Y APELLIDO</th>
                            <th>EDAD</th>
                            <th>PESO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for($i=0; $i < count($aPacientes); $i++) { ?>
                        <tr>
                            <td><?php echo $aPacientes[$i]["dni"] ?></td>
                            <td><?php echo $aPacientes[$i]["nombre"] ?></td>
                            <td><?php echo $aPacientes[$i]["edad"] ?></td>
                            <td><?php echo$aPacientes[$i]["peso"] ?></td>
                        </tr>
                           <?php } ?>
                       
                    </tbody>

                </table>
            </div>
        </div>
        <div class="row">
            <div class="col_12 text-center py-5">.
                <h1 class="py-5">Listado de pacientes-2</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th>DNI</th>
                            <th>NOMBRE Y APELLIDO</th>
                            <th>EDAD</th>
                            <th>PESO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($aPacientes as $apacientes) { ?>
                        <tr>
                            <td><?php echo $apacientes["dni"] ?></td>
                            <td><?php echo $apacientes["nombre"] ?></td>
                            <td><?php echo $apacientes["edad"] ?></td>
                            <td><?php echo$apacientes["peso"] ?></td>
                        </tr>
                           <?php } ?>
                       
                    </tbody>

                </table>
            </div>
        </div>



    </main>
</body>
</html>