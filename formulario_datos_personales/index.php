
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Formulario de datos personales</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Formulario de datos personales</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form method="POST" action="resultado.php">
                    <div class="py-3">
                        <label for="">Nombre:* </label>
                        <input type="text" id="txtNombre" name="txtNombre" class="form-control" required>
                    </div>
                    <div class="pb-3">
                        <label for="">DNI:* </label>
                        <input type="text" id="txtDni" name="txtDni" class="form-control">
                    </div>
                    <div class="pb-3">
                        <label for="">Telefono:* </label>
                        <input  type="text" id="txtTelefono" name="txtTelefono" class="form-control">
                    </div>
                    <div class="pb-3">
                        <label for="txtEdad">Edad:* </label>
                        <input  type="number" id="txtEdad" name="txtEdad" class="form-control">
                    </div>
                    <div class="pb-3">
                        <a href="resultado.php" class="btn btn-primary fload-end" >ENVIAR</a>
                    </div>
                </form>
            </div>
        </div>



    </main>
</body>

</html>