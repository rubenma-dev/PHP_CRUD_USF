<?php

include 'db.php';

$criatura = $_POST['criatura_nombre'];
$fecha = $_POST['fecha'];
$vacuna = $_POST['vacuna'];
$dosis = $_POST['dosis'];
$enfermero = $_POST['enfermero'];
$editar = $_POST['editar'];

$conexiondb = conectardb();

if ($editar == "si") {
    $id_vacunacion = $_POST['id_vacunacion'];
    $query = "UPDATE vacunacion SET criatura_nombre='" . $criatura . "', fecha='" . $fecha . "', vacuna='" . $vacuna . "', dosis='" . $dosis . "',enfermero='" . $enfermero . "' WHERE id_vacunacion=" . $id_vacunacion;
} else {
    $query = "INSERT INTO vacunacion (criatura_nombre, fecha, vacuna, dosis, enfermero) VALUES 
    ('$criatura', '$fecha', '$vacuna', '$dosis', '$enfermero')";
}

$respuesta = mysqli_query($conexiondb, $query);

if ($respuesta) {
    if ($editar == "si") {
        echo "<script>alert('Registro exitoso');
                                window.location.href='registrar_vacunacion.php'</script>";
    } else {
        echo "<script>alert('Registro exitoso');
                                window.location.href='registrar_vacunacion.php'</script>";
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