<?php

ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

$aEmpleados[] =array(
    "dni" => "5684987032", "nombre" => "David Silva", "bruto" => "3500000",
);
$aEmpleados[] =array(
    "dni" => "5645129876", "nombre" => "Jan Carlo Marintez", "bruto" => "2650000",
);
$aEmpleados[] =array(
    "dni" => "3216874951", "nombre" => "Luis Martinez", "bruto" => "1600000",  
);
$aEmpleados[] =array(
    "dni" => "6547832644", "nombre" => "Wilson Gordillo", "bruto" => "5500000",
);


function calcularNeto($bruto)
{
    return $bruto - ($bruto * 0.17);
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <title>Empleados</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1 class="py-3">Listado de empleados</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table table-hover border">
                        <thead>
                            <tr>
                                <th>DNI</th>
                                <th>Nombre</th>
                                <th>Sueldo</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($aEmpleados as $empleados){
                             ?>
                        <tr>
                            <td><?php echo $empleados["dni"] ?></td>
                            <td><?php echo mb_strtoupper( $empleados["nombre"]) ?></td>
                            <td><?php echo number_format( calcularNeto ($empleados["bruto"]), 2,",","."); ?></td>
                        </tr>
                           <?php } ?>
                       
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>la cantidad de empleados activos: <?php echo count ($aEmpleados);  ?>  </p>
            </div>
        </div>

    </main>


    
</body>
</html>