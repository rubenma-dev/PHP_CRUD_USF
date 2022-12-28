<?php

    require 'db.php';

    $id_criatura = $_GET['id_criatura'];

    $conexiondb = conectardb();

    $query = "DELETE FROM criatura WHERE id_criatura=".$id_criatura;

    $respuesta = mysqli_query($conexiondb, $query);

    if ($respuesta) 
    {
            echo "<script>alert('Se elimino el registro');
            window.location.href='listado_criatura.php'</script>";} 
            else {
                    echo "<script>alert('No se pudo eliminar el registro');
                    window.location.href='listado_criatura.php'</script>";
}
?>