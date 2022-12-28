<?php

include 'db.php';

$madre = $_POST['nombre_madre'];
$cedula_madre = $_POST['cedula_madre'];
$padre = $_POST['nombre_padre'];
$cedula_padre = $_POST['cedula_madre'];
$telefono = $_POST['telefono'];
$editar = $_POST['editar'];

$conexiondb = conectardb();

if ($editar == "si") {
    $id_padres = $_POST['id_padres'];
    $query = "UPDATE padres SET nombre_madre='" . $madre . "', cedula_madre='" . $cedula_madre . "', nombre_padre='" . $padre . "', cedula_padre='" . $cedula_padre . "',telefono='" . $telefono . "' WHERE id_padres=" . $id_padres;
} else {
    $query = "INSERT INTO padres (nombre_madre, cedula_madre, nombre_padre, cedula_padre, telefono) VALUES 
    ('$madre', '$cedula_madre', '$padre', '$cedula_padre', '$telefono')";
}

$respuesta = mysqli_query($conexiondb, $query);

if ($respuesta) {
    if ($editar == "si") {
        echo "<script>alert('Registro exitoso');
                                window.location.href='index.php'</script>";
    } else {
        echo "<script>alert('Registro exitoso');
                                window.location.href='index.php'</script>";
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