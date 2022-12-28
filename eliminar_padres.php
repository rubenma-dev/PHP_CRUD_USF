<?php

    require 'db.php';

    $id_padres = $_GET['id_padres'];

    $conexiondb = conectardb();

    $query = "DELETE FROM padres WHERE id_padres=".$id_padres;

    $respuesta = mysqli_query($conexiondb, $query);

    if ($respuesta) 
    {
            echo "<script>alert('Se elimino el registro');
            window.location.href='listado.php'</script>";} 
            else {
                    echo "<script>alert('No se pudo eliminar el registro');
                    window.location.href='listado.php'</script>";
}
?>