<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase 6</title>
</head>

<body>
    <!--
    funciones manejo de archivos: fopen, fwrite, fgets, fclose, fread
-->
    <h1>Manejo de archivos</h1>

    <form action="" method="get">
        <input type="text" name="texto" placeholder="Escribe algo">
        <input type="submit" value="Guardar texto" name="enviar">
    </form>
    <?php
    $archivo = "archivo.txt";
    if (isset($_GET['enviar'])) {
        $texto = "\n" . $_GET['texto'];

        if ($file = fopen($archivo, "a")) {
            echo "Abrimos ;)";
            fwrite($file, $texto);
            fclose($file);
        } else {
            echo "Error no puedo abrir ;(";
        }
    }
    ?>
    <a href="clase6.php?leer=si">Mostrar datos del archivo</a><br><br>
    <?php
    if (isset($_GET['leer'])) {
        $file = fopen($archivo, "r");
        while ($linea = fgets($file)) {
            echo $linea."<br>";
        }
        fclose($file);
    }
    ?>
</body>

</html>