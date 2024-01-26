<?php

ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

$aProductos = array();
$aProductos[] = array(
    "nombre" => "Smart TV 55\"4K UHD",
    "marca" => "Hitachi",
    "modelo" => "554KS20",
    "stock" => 60,
    "precio" => 58000


);
$aProductos[] = array(
    "nombre" => "Samsumg Galaxi A30 Blanco",
    "marca" => "Samsumg",
    "modelo" => "Galaxi A30",
    "stock" => 0,
    "precio" => 22000
);
$aProductos[] = array(
    "nombre" => "Aire Acondicionado Split Inverter Frio/Calor Surrey 2900F",
    "marca" => "Surrey",
    "modelo" => "553AIQ1201E",
    "stock" => 8,
    "precio" => 45000


);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <title>Listado de productos</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1 class="py=5">Listado de productos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Stock</th>
                            <th>Presio</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $sumatoriaPrecio = 0;
                        for ($contador = 0; $contador < count($aProductos); $contador++) {
                            $sumatoriaPrecio += $aProductos[$contador]["precio"];

                        ?>
                            <tr>
                                <td><?php echo $aProductos[0]["nombre"]; ?></td>
                                <td><?php echo $aProductos[0]["marca"]; ?></td>
                                <td><?php echo $aProductos[0]["modelo"]; ?></td>
                                <td><?php echo $aProductos[0]["stock"] == 0 ? "Hay Stock" : ($aProductos[$contador]["stock"] <= 10 ? "Hay poco stock" : "No hay stock"); ?></td>
                                <td><?php echo $aProductos[0]["precio"]; ?></td>
                                <td><button class="btn btn-primary">Comprar</button></td>

                            </tr>
                        <?php
                        }
                        ?>
                        <tr>
                            <td><?php echo $aProductos[1]["nombre"]; ?></td>
                            <td><?php echo $aProductos[1]["marca"]; ?></td>
                            <td><?php echo $aProductos[1]["modelo"]; ?></td>
                            <td><?php echo $aProductos[1]["stock"] >= 10 ? "Hay Stock" : ($aProductos[1]["stock"] > 0 && $aProductos[1]["stock"] <= 10 ? "Hay poco stock" : "No hay stock"); ?></td>
                            <td><?php echo $aProductos[1]["precio"]; ?></td>
                            <td><button class="btn btn-primary">Comprar</button></td>

                        </tr>
                        <tr>
                            <td><?php echo $aProductos[2]["nombre"]; ?></td>
                            <td><?php echo $aProductos[2]["marca"]; ?></td>
                            <td><?php echo $aProductos[2]["modelo"]; ?></td>
                            <td><?php echo $aProductos[2]["stock"] >= 10 ? "Hay Stock" : ($aProductos[2]["stock"] > 0 && $aProductos[2]["stock"] <= 10 ? "Hay poco stock" : "No hay stock"); ?></td>
                            <td><?php echo $aProductos[2]["precio"]; ?></td>
                            <td><button class="btn btn-primary">Comprar</button></td>

                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>La sumatoria de los precios de los productos es: <?php echo $sumatoriaPrecio  ?></p>
            </div>
        </div>






    </main>





</body>

</html>