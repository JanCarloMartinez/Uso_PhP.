<?php

ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

$iva = 21;
$precioSinIva = 0;
$precioConIva = 0;
$ivaCantidad = 0;

if ($_POST) {
// POST siempre va con [] "Es una array asociativa"
    $iva = $_POST["lstIva"];
    $precioSinIva = $_POST["txtPrecioSinIva"];
    $precioConIva = $_POST["txtPrecioConIva"];

    //Dado un importe sin IVA, Precio con IVA = importe * (21/100+1)
    if($precioSinIva != "" ){
        $precioConIva = $precioSinIva * ($iva/100+1);
        $ivaCantidad = $precioConIva - $precioSinIva;
    }
    //Dado un importe con IVA, Precio sin IVA = importe / (20/100+1)
    if($precioConIva != ""){
        $precioSinIva = $precioConIva / ($iva/100+1);
        $ivaCantidad = $precioConIva - $precioSinIva;
    }




}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Calculadora de IVA</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Calculadora de IVA</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-3 offset-2">
                <form action="" method="POST">
                    <div class="pb-3">
                        <label for="">IVA</label>
                        <select name="lstIva" id="lstIva" class="form-control">
                            <option value="10.5">10.5</option>
                            <option value="19" selected>19</option>
                            <option value="21">21</option>
                            <option value="27">27</option>
                        </select>
                    </div>
                    <div class="pb-3">
                        <label for="">Precio sin IVA</label>
                        <input type="text" id="txtPrecioSinIva" name="txtPrecioSinIva" class="form-control">
                    </div>
                    <div class="pb-3">
                        <label for="">Precio con IVA</label>
                        <input type="text" id="txtPrecioConIva" name="txtPrecioConIva" class="form-control">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary" >Calcular</button>
                    </div>
                </form>
            </div>
            <div class="col-5 pt-4">
                <table class="table table-hover border">
                    <tr>
                        <th>IVA:</th>
                        <td><?php echo $iva; ?>%</td>
                    </tr>
                    <tr>
                        <th>Precio sin IVA</th>
                        <td>$<?php echo number_format( $precioSinIva); ?></td>
                    </tr>
                    <tr>
                        <th>Precio con IVA</th>
                        <td>$<?php echo number_format( $precioConIva); ?></td>
                    </tr>
                    <tr>
                        <th>IVA Cantidad</th>
                        <td>$<?php echo number_format( $ivaCantidad); ?></td>
                    </tr>
                </table>
            </div>

        </div>

    </main>
</body>

</html>