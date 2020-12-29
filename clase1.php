<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase 1</title>
</head>

<body>
    <h1>Clase 1 PHP</h1>
    <?php
    //comentarios de una línea
    /*
    comentarios
    de varias líneas
    */
    // echo "Hola Mundo<br>";
    // $nombre = "Amalia";//declarando e inicializando
    // //echo $nombre;
    // $edad = 10;
    // echo $edad;
    // $resultado = true;
    // $precio = 250.50;
    // $edad= 20;
    // echo "<br>La nueva edad es: ".$edad;

    //EJERCICIO DE OPERACIONES ARITMETICAS
    // $numero1 = 10;
    // $numero2 = 20;
    // $suma = $numero1 + $numero2;
    // $resta = $numero1 - $numero2;
    // $multiplicacion = $numero1 * $numero2;
    // $division = $numero1 / $numero2;
    // echo "La suma es ".$suma;
    // echo "<br>La resta es ".$resta;
    // echo "<br>La multiplicación es ".$multiplicacion;
    // echo "<br>La división es ".$division; 
    /*
    TABLA DE LA VERDAD
    && and -> true todos sus lados sean verdaderos
    TRUE && TRUE = TRUE
    TRUE && FALSE = FALSE
    FALSE && TRUE = FALSE
    FALSE && FALSE = FALSE
    || or -> false todos sus lados sean falsos
    FALSE || FALSE = FALSE
    TRUE || FALSE = TRUE
    FALSE || TRUE = TRUE
    TRUE || TRUE = TRUE
    */

    // EJERCICIO OPERACIONES LOGICAS
    // $x = true;//1
    // $y = false;//0
    // $result = $x && $y;
    // echo !$y;//negación 
    /*
VARIABLES SUPERGLOBALES GET, POST
*/


    ?>
    <a href="clase1B.php?nombre=Juan&edad=40&correo=j@correo.com">Visitar Sitio</a>
    <h2>Formulario</h2>
    <!--get datos por url y post datos invisibles-->
    <form action="clase1B.php" method="post">
        Nombre <input type="text" name="nombre"><br>
        Edad <input type="number" name="edad"><br>
        Correo <input type="email" name="correo"><br>
        <input type="submit" value="Enviar">
    </form>
    <h3>Formulario de calculos</h3>
    <?php
    if (isset($_GET['boton'])) {
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $suma = $num1 + $num2;
        $resta = $num1 - $num2;
        $multi = $num1 * $num2;
        $divi = $num1 / $num2;
        echo "<b style=color:red>Resultados</b><br>";
        echo "<b>Suma: </b> " . $suma;
        echo "<br><b>Resta: </b> " . $resta;
        echo "<br><b>Multiplicación: </b> " . $multi;
        echo "<b>División: </b> " . $divi;
    }

    ?>
    <form action="" method="get">
        <input type="number" name="num1" placeholder="Escribe un número">
        <input type="number" name="num2" placeholder="Escribe otro número"><br>
        <input type="submit" value="Calcular" name="boton">
    </form>
</body>

</html>