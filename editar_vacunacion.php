<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Persona</title>
</head>

<body>

    <?php
    include('menu.php')
    ?>

    <?php
    include 'db.php';
    $conexiondb = conectardb();
    $id_vacunacion = $_GET['id_vacunacion'];
    $query = "SELECT * FROM vacunacion WHERE id_vacunacion=" . $id_vacunacion;
    $respuesta = mysqli_query($conexiondb, $query);
    $persona = mysqli_fetch_row($respuesta);
    mysqli_close($conexiondb);
    ?>


    <div class="col-sm-4 offset-sm-4">
        <br>
        <br>
    <h1>Editar Vacunacion</h1>
    <form action="guardar_vacunacion.php" method="post">
        <table border="0">
        
            <tr>
                <th><label for="">NOMBRE</label></th>
                <th><input type="text" name="criatura_nombre" id="" value='<?php echo $persona[1]; ?>'></th>
            </tr>
            <tr>
                <th><label for="">FECHA VACUNACION</label></th>
                <th><input type="text" name="fecha" id="" value='<?php echo $persona[2]; ?>'></th>
            </tr>
            <tr>
                <th><label for="">VACUNA:</label></th>
                <th><input type="text" name="vacuna" id="" value='<?php echo $persona[3]; ?>'></th>
            </tr>
            <tr>
                <th><label for="">DOSIS:</label></th>
                <th><input type="text" name="dosis" id="" value='<?php echo $persona[4]; ?>'></th>
            </tr>
            <tr>
                <th><b><label for="">ENFERMERO:</label></b></th>
                <th><input type="text" name="enfermero" id="" value='<?php echo $persona[5]; ?>'></th>
            </tr>
        </table>
        <input type="hidden" name="id_vacunacion" id="" value='<?php echo $persona[0] ?>' readonly>
        <input type="hidden" name="editar" id="" value='si' readonly>
        <input class="btn btn-outline-primary" type="submit" value="GUARDAR">
    </form>
    </div>
</body>