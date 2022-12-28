<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Personas</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="./css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <header>
        <?php
        include('menu.php')
        ?>

    </header>
    <?php
    include 'db.php';
    $conexiondb = conectardb();
    $query = "SELECT * FROM padres";
    $resultado = mysqli_query($conexiondb, $query);
    mysqli_close($conexiondb);
    ?>

    <div class="container center">
        <div class="row">
            <div class="col-md-4 mt-3">
                <?php
                if (isset($_COOKIE['message'])) {
                    echo "<div class='alert " . $_COOKIE['alert'] . " alert-dismissible fade show' role='alert'>";
                    echo $_COOKIE['message'];
                    echo "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>";
                    echo "</div>";
                    setcookie('message', '', 1);
                    setcookie('alert', '', 1);
                }
                ?>
            </div>

                <div class="rows-sm-6">
                    <h1 class="text-center mt-4">Listado Padres</h1>
                    <table class="table table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">N</th>
                                <th scope="col">MAMÁ</th>
                                <th scope="col">CEDULA</th>
                                <th scope="col">PAPÁ</th>
                                <th scope="col">CEDULA</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $index = 1;
                            while ($paciente = mysqli_fetch_assoc($resultado)) {
                                echo "<tr>";
                                echo "<th scope='row'>" . $index++ . "</th>";
                                echo "<td>" . $paciente['nombre_madre'] . "</td>";
                                echo "<td>" . $paciente['cedula_madre'] . "</td>";
                                echo "<td>" . $paciente['nombre_padre'] . "</td>";
                                echo "<td>" . $paciente['cedula_padre'] . "</td>";
                                echo "<td>" . $paciente['telefono'] . "</td>";
                                echo "<td>";
                                echo "<a href='editar_padres.php?id_padres=" . $paciente['id_padres'] . "''> <i class=for='btnradio1'>Editar</i> </a>";
                                echo "<a href='eliminar_padres.php?id_padres=" . $paciente['id_padres'] . "' class=''> <i class=for='btnradio1'>Borrar</i> </a>";
                                echo "</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

               
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
            <script type="text/javascript">
                const btnDelete = document.querySelectorAll('.btn-danger');
                if (btnDelete) {
                    const btnArray = Array.from(btnDelete);
                    btnArray.forEach((btn) => {
                        btn.addEventListener('click', (e) => {
                            if (!confirm('Estàs seguro de eliminarlo?')) {
                                e.preventDefault();
                            }
                        });
                    })
                }
            </script>
</body>

</html>