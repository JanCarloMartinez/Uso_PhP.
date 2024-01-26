<?php

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Listado</title>
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
                            <input type="text" id="txtNombre" name="txtNombre" class="form-control my-2" placeholder="Ingrese el nombre y apellido" >
                        </div>
                        <label for="txtDni">DNI:</label>
                        <input type="text" name="txtDni" class="form-control my-2">
                    
                        <label for="txtTelefono">Telefono:</label>
                        <input type="text" name="txtTelefono" class="form-control my-2"

                        <label for="txtEdad">Edad:</label>
                        <input type="text" name="txtEdad" class="form-control my-2"

                    <button type="submit" name="btnEnviar" class="btn bg-primary text-white">Enviar</button>
                    <button type="submit" name="btnEliminar" class="btn bg-danger text-white">Eliminar</button>
                     
                    </form>

                </div> 
            <div class="col-6">
                <table>
                    <thead>
                        <th>Nombre</th>
                        <th>DNI</th>
                        <th>Telefono</th>
                        <th>Edad</th>
                        <th>Acciones</th>
                    </thead>
                </table>
            </div>
      </div>
    </main>
</body>

</html>