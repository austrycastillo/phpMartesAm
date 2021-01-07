<?php
// $edad[0] = 20;
// $edad[1] = 30;
// $edad[2] = 10;
// $edad[3] = 8;
// $tam = count($edad);//cuenta la cantidad de elementos
// for ($i = 0; $i < $tam; $i++) {
//     echo $edad[$i];
// }
//i= 4
//imprime: 20 30 10 8


// $edad[]=20;
// $edad[]=30;
// $edad[]=10;
// $edad[]=8;

// $edad[20]=5;
// $edad[42]=4;
// $edad[1]=2;
// echo $edad[1];

// $ejemplo = array("texto1","texto2");
// $paciente = array(
//     "nombre" => "Juan",
//     "edad" => 18,
//     "correo"=>"correo@web.com"
// );
//echo $paciente["nombre"];
// var_dump($paciente);//solo para pruebas
// echo "<br>";
// print_r($paciente);
// foreach($paciente as $valor){
//     echo $valor." - ";
// }
// echo "<br>";
// foreach($paciente as $indice => $valor){
//     echo $indice.": ".$valor." <br> ";
// }

// $jugador = [
//     "nombre" => "Diego",
//     "apellido" => "Perez"
// ];
// foreach($jugador as $indice => $valor){
//         echo $indice.": ".$valor." <br> ";
//     }

// $animal = array(
//     array("perro","gato"),
//     array("gallina","conejo","vaca"),
//     array("cocodrilo","caballo")
// );
// echo $animal[2][1];
// $jugadores = [
//     [
//         "nombre" => "Fulano",
//         "edad" => 18
//     ],
//     [
//         "nombre" => "Rosa",
//         "edad" => 50
//     ]
// ];

// echo $jugadores[0]["nombre"];
// echo "<hr>";
// foreach($jugadores as $valor){
//     echo $valor["nombre"];
// }

//ALGUNAS FUNCIONES PARA TRABAJAR CON ARREGLOS
$cliente = array("Amalia", "Juan", "Axel", "Glanda", "Verónica");
//array_unshift($cliente,"Carolina");//agregar al inicio
//array_push($cliente,"Carolina");//agrega al final
//array_shift($cliente);//elimina al inicio
//array_pop($cliente);//eminar al final
// if(in_array("Juan",$cliente)){//buscar dato
//     echo "Juan si se encuentra en el listado";
// }
//echo implode(" - ", $cliente);//de array a separado
// $productos = "shampoo, acondicionar, crema, jabón";
// //print_r(explode(",",$productos));//de separado a array
// sort($cliente);
// print_r($cliente);


//PRACTICA 1
//Crear un array con valores de cotizaciones x moneda
//informar la menor cotización y la mayor cotización
$cotizaciones = [
    100, 2000, 50, 1, 0
];

$menor_cotizacion = $cotizaciones[0];//0
$mayor_cotizacion = $cotizaciones[0];
foreach ($cotizaciones as $indice) {
    if ($indice < $menor_cotizacion) {
        $menor_cotizacion = $indice;
    }
    if ($indice > $mayor_cotizacion) {
        $mayor_cotizacion = $indice;
    }
}

echo 'El menor valor es: ' . $menor_cotizacion;
echo '<br>El mayor valor es: ' . $mayor_cotizacion;