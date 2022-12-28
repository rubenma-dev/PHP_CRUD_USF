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
    $id_criatura = $_GET['id_criatura'];
    $query = "SELECT * FROM criatura WHERE id_criatura=" . $id_criatura;
    $respuesta = mysqli_query($conexiondb, $query);
    $persona = mysqli_fetch_row($respuesta);
    mysqli_close($conexiondb);
    ?>


    <div class="col-sm-4 offset-sm-4">
        <br>
        <br>
    <h1>Editar Registro</h1>
    <form action="guardar_criatura.php" method="post">
        <table border="0">
        
            <tr>
                <th><label for="">NOMBRE</label></th>
                <th><input type="text" name="nombre" id="" value='<?php echo $persona[1]; ?>'></th>
            </tr>
            <tr>
                <th><label for="">CEDULA:</label></th>
                <th><input type="text" name="cedula" id="" value='<?php echo $persona[2]; ?>'></th>
            </tr>
            <tr>
                <th><b><label for="">Nacimiento:</label></b></th>
                <th><input type="date" name="fecha_nacimiento" id="" value='<?php echo $persona[3]; ?>'></th>
            </tr>
            <tr>
                <th><b><label for="">GENERO:</label></b></th>
                <th><input type="text" name="genero" id="" value='<?php echo $persona[4]; ?>'></th>
            </tr>
        </table>
        <input type="hidden" name="id_criatura" id="" value='<?php echo $persona[0] ?>' readonly>
        <input type="hidden" name="editar" id="" value='si' readonly>
        <input class="btn btn-outline-primary" type="submit" value="GUARDAR">
    </form>
    </div>
</body>

</html>