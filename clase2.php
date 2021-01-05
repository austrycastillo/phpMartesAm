<?php
/*
if(condición){
  ..instrucciones..
}else{
    ...instrucciones
}

if(condición){
  ..instrucciones..
}else if(condición){
    ...instrucciones
}else if(condición){
    ...instrucciones
}else{
    ...instrucciones
}
*/
// $num = 10;
// if($num < 10){//true para el if
//     echo "El número es menor a 10";
// }else if($num>10){//false para el ese
//     echo "El número es mayor a 10";
// }else{
//     echo "El número es igual a 10";
// }
/*
 BOLICHE + de 18 años y - de 25 puede entrar , si entra verificar si tiene 22 le damos una bebida gratis
*/
// $edad = 22;
// if($edad>=18 && $edad<25){
//     echo "Bienvenido ;)";
//     if($edad == 22){
//         echo "Ganaste una bebida!";
//     }else{
//         echo "No ganaste la bebida";
//     }
// }else{
//     echo "No puedes pasar ;(";
//     if($edad<18){
//         echo "<br>por bebito";
//     }else{
//         echo "<br>por viejito";
//     }
// }
/*
determinar si un número tiene 1, 2, 3 o 4 cifras
*/
/*
switch(variable){
    case n1:
        ...instrucciones...
        break;
    case n2:
        ...instrucciones...
        break;
    case n3:
        ...instrucciones...
        break;
    default:
        ...instrucciones...
        break;
}
*/
?>
<!--<form action="" method="get">
    Selecciona el monto a recargar:<br>
    <select name="monto">
        <option>50</option>
        <option>100</option>
        <option>200</option>
        <option>500</option>
        <option>1000</option>
    </select>
    <input type="submit" value="Recargar" name="enviar">
</form>-->
<?php
// if(isset($_GET['monto'])){ //isset verifica si está definida
//     $monto = $_GET['monto'];
//     switch ($monto) {
//         case 50:
//             echo "<b>Recargaste $50, tienes 2 viajes";
//             break;
//         case 100:
//             echo "<b>Recargaste $100, tienes 4 viajes";
//             break;
//         case 200:
//             echo "<b>Recargaste $200, tienes 8 viajes";
//             break;
//         case 500:
//             echo "<b>Recargaste $500, tienes 12 viajes";
//             break;
//         case 1000:
//             echo "<b>Recargaste $1000, tienes 30 viajes";
//             break;
//     }
// }
/*
while(condición){
    ..instrucciones..
    ajuste
}
do{
    ..instrucciones...
    ajuste
}while(condición);
*/

// $inicio = 1;
// while($inicio<=10){
//     echo "hola<br>";
//     $inicio++;//$inicio = $inicio + 1;
// }
// $num = 1;
// do {
//     echo $num;
//     $num++;
// } while ($num <= 10);
/*
formulario solicitar inicio y fin
*/
?>
<!-- <form action="" method="post">
    Escriba el número de inicio<br>
    <input type="number" name="numeroInicio"><br>
    Escriba el número fin<br>
    <input type="number" name="numeroFin"><br>
    <input type="submit" value="mostrar" name="enviar">
</form> -->
<?php
// if (isset($_POST['enviar'])) {
//     $numeroInicio = $_POST['numeroInicio'];
//     $numeroFin = $_POST['numeroFin'];
//     while ($numeroInicio <= $numeroFin) {
//         echo $numeroInicio . "<br>";
//         $numeroInicio++;
//     }
// }

/*
for(inicio;condición;ajuste){
    ...instrucciones...
}
*/
// for ($i = 1; $i <= 10; $i++) {
//     echo $i."<br>";
// }


?>
<table border="1" cellpadding="50" cellspacing="0">
    <?php
    for ($i = 1; $i < 6; $i++) {
    ?>
        <tr style="background-color: lightblue;">
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr style="background-color: lightpink;">
            <td></td>
            <td></td>
            <td></td>
        </tr>
    <?php } ?>
</table>