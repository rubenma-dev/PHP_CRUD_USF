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
        <form action="guardar_criatura.php" method="post">
            <H3>
                <th><b><label for="">Paciente:</label></b></th>
            </H3>

            <div class="mb-3">
                <th><label for="">Nombre del paciente:</label></th>
                <th><input class="form-control" type="text" name="nombre" id=""></th>
            </div>
            <div class="mb-3">
                <th><label for="">Cedula:</label></th>
                <th><input class="form-control" type="text" name="cedula" id=""></th>
            </div>
            <div class="mb-3">
                <th><label for="">Fecha de nacimiento:</label></th>
                <th><input class="form-control" type="date" name="fecha_nacimiento" id=""></th>
            </div>
            <div class="mb-3">
                <th><label for="">Genero</label></th>
                <th><select class="form-control" type="text" name="genero" id=""></th>
                        <option value="Femenino">Femenino</option>
                        <option value="Masculino" selected>Masculino</option>
                    </select>
            </div>
            <input type="hidden" name="editar" id="" value='no' readonly>
            <input class="btn btn-dark" type="submit" value="GUARDAR">
        </form>
    </div>
</body>
</html>