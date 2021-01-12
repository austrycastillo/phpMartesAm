<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>

<body>
    <h1>Calculadora</h1>
    <form action="" method="post">
        Número 1: <input type="number" name="numero1"><br>
        Número 2: <input type="number" name="numero2"><br>
        seleccione la operación a realizar:<br>
        <select name="operacion">
            <option value="1">suma</option>
            <option value="2">resta</option>
            <option value="3">multiplicar</option>
            <option value="4">dividir</option>
        </select><br><br>
        <input type="submit" value="Calcular" name="boton">
    </form>
    <?php
    function sumar($x, $y)
    {
        return $x + $y;
    }
    function restar($x, $y)
    {
        return $x - $y;
    }
    function multiplicar($x, $y)
    {
        return $x * $y;
    }
    function dividir($x, $y)
    {
        return $x / $y;
    }
    if (isset($_POST['boton'])) {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $operacion = $_POST['operacion'];
        switch ($operacion) {
            case 1:
                echo "<h1>La suma es: " . sumar($numero1, $numero2) . "</h1>";
                break;
            case 2:
                echo "<h1>La resta es: " . restar($numero1, $numero2) . "</h1>";
                break;
            case 3:
                echo "<h1>La multiplicación es: " . multiplicar($numero1, $numero2) . "</h1>";
                break; 
            case 4:
                echo "<h1>La división es: " . dividir($numero1, $numero2) . "</h1>";
                break;
        }
    }
    ?>
</body>

</html>