<?php
// function saludar()
// {
//     //instrucciones
//     $mensaje = "Holaaaa";
//     return $mensaje;
// }
// echo saludar();

// function saludar()
// {
//     //instrucciones
//     $mensaje = "Holaaaa";
//     echo $mensaje;
// }
// saludar();

// function saludar($nombre)
// {
//     //instrucciones
//     $mensaje = "Hola ".$nombre;
//     return $mensaje;
// }
// echo saludar("Ana");

function saludar($nombre = "Fulano")
{
    //instrucciones
    $mensaje = "Hola " . $nombre;
    return $mensaje;
}
//echo saludar();

function sumar($a, $b, $c)
{
    return $a + $b + $c;
}
$x=2;
echo sumar($x,4,6);