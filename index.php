<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
<?php
    include('menu.php')
    ?>
        <div class="col-sm-4 offset-sm-4">
        <br>
        <form action="guardar_padres.php" method="post">
            <H3>
                <th><b><label for="">REGISTRO PARA PADRES:</label></b></th>
            </H3>

            <div class="mb-3">
                <th><label for="">Nombre de la Madre:</label></th>
                <th><input class="form-control" type="text" name="nombre_madre" id=""></th>
            </div>
            <div class="mb-3">
                <th><label for="">Cedula:</label></th>
                <th><input class="form-control" type="text" name="cedula_madre" id=""></th>
            </div>
            <div class="mb-3">
                <th><label for="">Nombre del Padre:</label></th>
                <th><input class="form-control" type="text" name="nombre_padre" id=""></th>
            </div>
            <div class="mb-3">
                <th><label for="">Cedula del Padre:</label></th>
                <th><input class="form-control" type="text" name="cedula_padre" id=""></th>
            </div>
            <div class="mb-3">
                <th><label for="">Telefono:</label></th>
                <th><input class="form-control" type="text" name="telefono" id=""></th>
            </div>
            <input type="hidden" name="editar" id="" value='no' readonly>
            <input class="btn btn-dark" type="submit" value="GUARDAR">
        </form>
    </div>
</body>
</html>