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
    $id_padres = $_GET['id_padres'];
    $query = "SELECT * FROM padres WHERE id_padres=" . $id_padres;
    $respuesta = mysqli_query($conexiondb, $query);
    $persona = mysqli_fetch_row($respuesta);
    mysqli_close($conexiondb);
    ?>


    <div class="col-sm-4 offset-sm-4">
        <br>
        <br>
    <h1>Editar Vacunacion</h1>
    <form action="guardar_padres.php" method="post">
        <table border="0">
        
            <tr>
                <th><label for="">NOMBRE COMPLETO DE LA MADRE</label></th>
                <th><input type="text" name="nombre_madre" id="" value='<?php echo $persona[1]; ?>'></th>
            </tr>
            <tr>
                <th><label for="">CEDULA DE LA MADRE</label></th>
                <th><input type="text" name="cedula_madre" id="" value='<?php echo $persona[2]; ?>'></th>
            </tr>
            <tr>
                <th><label for="">NOMBRE COMPLETO DEL PADRE:</label></th>
                <th><input type="text" name="nombre_padre" id="" value='<?php echo $persona[3]; ?>'></th>
            </tr>
            <tr>
                <th><label for="">CEDULA DEL PADRE:</label></th>
                <th><input type="text" name="cedula_padre" id="" value='<?php echo $persona[4]; ?>'></th>
            </tr>
            <tr>
                <th><b><label for="">TELEFONO:</label></b></th>
                <th><input type="text" name="telefono" id="" value='<?php echo $persona[5]; ?>'></th>
            </tr>
        </table>
        <input type="hidden" name="id_padres" id="" value='<?php echo $persona[0] ?>' readonly>
        <input type="hidden" name="editar" id="" value='si' readonly>
        <input class="btn btn-outline-primary" type="submit" value="GUARDAR">
    </form>
    </div>
</body>

</html>