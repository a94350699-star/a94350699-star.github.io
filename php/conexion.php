<?php
    $conexion = mysqli_connect("localhost","root","mesa de ayuda");

    if ($conexion) {
        echo "conexion exitosa";
    } else {
        echo "conexion fallida";
    }
?>