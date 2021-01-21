<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase 5</title>
</head>

<body>
    <h1>Algunas funciones de php</h1>
    <form action="" method="post">
        <input type="text" name="texto">
        <input type="submit" value="Probar" name="boton">
    </form>
    <?php
    if (isset($_POST['boton'])) {
        $texto = $_POST['texto'];
        echo strtoupper($texto); //convertir en mayúscula
        echo "<br>";
        echo strtolower($texto); //minúscula
        echo "<br>";
        echo ucfirst($texto); //primer caracter en mayuscula
        echo "<br>";
        echo ucwords($texto); //primera letra de cada palabra
        echo "<br>";
        echo strlen($texto); //número de caracteres
        echo "<br>";
        if (strlen($texto) <= 5) {
            echo "No puede ser tan pequeño el texto";
            echo "<br>";
        } else {
            //guardo bd
        }
        //ltrim borrar espacios en blanco del lado izquierdo
        //rtrim borrar espacios en blanco del lado derecho
        //trim borrar espacios en blanco de ambos lados
        trim($texto);
        if (empty($texto)) {
            echo "Espacio vacío!";
            echo "<br>";
        }
        //$texto = 13.75;
        echo round($texto); //redondear
        echo "<br>";
        echo ceil($texto); //redondea hacia arriba
        echo "<br>";
        echo floor($texto); //redondea hacia abajo
        echo "<br>";
        echo number_format($texto, 3, '-', '.');
        echo "<br>";
        echo str_shuffle($texto);
        is_integer($texto); //is_string, is_numeric, is_double,is_bool
        echo "<br>";
        echo md5($texto); //cifrar, sha1
        echo "<br>";
        echo substr($texto, 1, 2);
        //expresiones regulares, sintaxis:    /contenido/
        /*
        \d digitos 0 y 9
        \w letras
        /\d{2,5}/
        */
       echo "<br>";
        if(preg_match("/[A-Z,a-z]/",$texto)){
            echo "son letras";
        }else{
            echo "no son letras";
        }
        echo "<br>";
        if(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/",$texto)){
            echo "correo correcto";
        }else{
            echo "no tiene el formato de correo";
        }
        
    }
    ?>
</body>

</html>