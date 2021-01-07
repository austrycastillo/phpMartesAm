<?php
$accesos = [
    [
        "usuario" => "pepe",
        "clave" => 123
    ],
    [
        "usuario" => "admin",
        "clave" => 123
    ],
    [
        "usuario" => "ana",
        "clave" => 123
    ],
    [
        "usuario" => "uno",
        "clave" => 123
    ]
];
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$eof = false;
foreach ($accesos as $dato) {
    if ($usuario == $dato["usuario"] && $clave == $dato["clave"]) {
        $eof = true;
    }
}
if ($eof == true) {
    echo "<h1>Bienvenido al sistema</h1>";
} else {
    echo "<h1 style=color:red>Datos incorrectos</h1>";
}
