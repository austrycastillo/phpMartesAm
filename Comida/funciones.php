<?php
function guardarComida($conexion, $datos)
{
    $nombre = $datos['nombre'];
    $ingrediente = $datos['ingrediente'];
    $precio = $datos['precio'];
    $sql = "INSERT INTO plato (nombre,ingredientes,precio) VALUES ('$nombre','$ingrediente','$precio')";
    mysqli_query($conexion,$sql);//bd y query
    if(mysqli_affected_rows($conexion) > 0){
        header("location:index.php?rta=guardado");
    }else{
        header("location:index.php?rta=no-guarda");
    }
}
