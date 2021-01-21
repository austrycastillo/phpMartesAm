<?php
/*
mysqli: mysql
pdo: varios motores bd, sentencias preparadas, oop
CRUD: create read update delete ABM
--> ddl: create, drop, alter y dml: insert, select, update, delete
mysqli_connect: conectar con la bd (4 datos)
mysqli_query: ejecutar un script
mysqli_fetch_all, mysqli_fetch_assoc: extraer info de la bd
*/

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DATABASE', 'comidas');
$conexion = mysqli_connect(HOST, USER, PASS, DATABASE);
if(!$conexion){
    echo "Error no conecto";
}