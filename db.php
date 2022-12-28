<?php
    function conectardb() {
        $servidor = 'localhost';
        $usuario = 'root';
        $contraseña = '';
        $personadb = 'vacunatorio';

        $conexion = mysqli_connect($servidor, $usuario, $contraseña, $personadb);

        return $conexion;
    }
?>