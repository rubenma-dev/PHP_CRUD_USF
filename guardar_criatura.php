<?php

include 'db.php';

$nombre = $_POST['nombre'];
$cedula = $_POST['cedula'];
$fecha = $_POST['fecha_nacimiento'];
$genero = $_POST['genero'];
$editar = $_POST['editar'];

$conexiondb = conectardb();

if ($editar == "si") {
    $id_criatura = $_POST['id_criatura'];
    $query = "UPDATE criatura SET nombre='" . $nombre . "', cedula='" . $cedula . "', fecha_nacimiento='" . $fecha . "', genero='" . $genero . "' WHERE id_criatura=" . $id_criatura;
} else {
    $query = "INSERT INTO criatura (nombre, cedula, fecha_nacimiento, genero) VALUES 
    ('$nombre', '$cedula', '$fecha', '$genero')";
}

$respuesta = mysqli_query($conexiondb, $query);

if ($respuesta) {
    if ($editar == "si") {
        echo "<script>alert('Registro exitoso');
                                window.location.href='registrar_criatura.php'</script>";
    } else {
        echo "<script>alert('Registro exitoso');
                                window.location.href='registrar_criatura.php'</script>";
    }
} else {
    if ($editar == "si") {
        echo ("No se pudo actualizar la persona");
    } else {
        echo ("No se pudo registrar la persona");
    }
}
  mysqli_close($conexiondb);
  ?>