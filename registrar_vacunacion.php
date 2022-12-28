<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Persona</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <?php
    include('menu.php');
    include 'db.php';
    $conexiondb = conectardb();
    $query_v = "SELECT * FROM criatura ORDER BY nombre ASC";
    $resultado_v = mysqli_query($conexiondb, $query_v);
    $query_c = "SELECT * FROM padres ORDER BY nombre_madre ASC";
    $resultado_c = mysqli_query($conexiondb, $query_c);
    mysqli_close($conexiondb);
    ?>

    <div class="col-sm-4 offset-sm-4">
        <form class="" role="form" action="guardar_vacunacion.php" method="post">
            <div class="">
                <h3>Registar Vacunacion</h3>
                <P>NOMBRE CRIATURA<select class="form-control" name="criatura_nombre" class="" id="inputGroupSelect01"></P>
                <?php
                while ($vacunacion = mysqli_fetch_assoc($resultado_v)) {
                    echo "<option value='" . $vacunacion['id_criatura'] . "'>" . $vacunacion['nombre'] . "</option>";
                }
                ?>
                </select>
                </th>
                <p>FECHA DE NACIMIENTO: <input class="form-control" type="date" name="fecha" size="50"></p>
                <p>NOMBRE DE VACUNA: <input class="form-control" type="text" name="vacuna" size="50"></p>
                <p>DOSIS:<select class="form-control" name="dosis"></p>
                        <option value="Primera">Primera Dosis</option>
                        <option value="Segunda" selected>Segunda Dosis</option>
                        <option value="Tercera">Tercera Dosis</option>
                    </select>
                <p>NOMBRE DEL ENFERMERO: <input class="form-control" type="text" name="enfermero" size="50"></p>
                <input class="btn btn-dark" type="submit" value="Enviar">
            </div>
        </form>
    </div>

    <link rel="stylesheet" href="./CSS/index.css">
</body>

</html>