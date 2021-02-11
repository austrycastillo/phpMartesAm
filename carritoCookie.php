<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito Cookie</title>
</head>

<body>
    <h1>Productos disponibles</h1>
    <?php
    if (isset($_POST['enviar'])) {
        if (isset($_POST['zapatos']) && is_numeric($_POST['zapatos'])) {
            setcookie(
                "zapatos",
                $_POST['zapatos'],
                time() + (60 * 60 * 24 * 90)
            );
           
        }
        if (isset($_POST['cartera']) && is_numeric($_POST['cartera'])) {
            setcookie(
                "cartera",
                $_POST['cartera'],
                time() + (60 * 60 * 24 * 90)
            );
            
        }
        header("location:./carritoCookie.php");
    }
    if (isset($_GET['zapatos']) && $_GET['zapatos']=='eliminar') {
        setcookie(
            "zapatos",
            "0"
        );
        header("location:./carritoCookie.php");
    }
    if (isset($_GET['cartera']) && $_GET['cartera']=='eliminar') {
        setcookie(
            "cartera",
            "0"
        );
        header("location:./carritoCookie.php");
    }
    ?>
    <form action="" method="post">
        <table cellpadding=10>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
            </tr>
            <tr>
                <td>Zapatos de vidrio</td>
                <td><input type="text" name="zapatos" size="2"></td>
            </tr>
            <tr>
                <td>Cartera de cartón</td>
                <td><input type="text" name="cartera" size="2"></td>
            </tr>
        </table>
        <input type="submit" value="Pulsa para añadir al carrito" name="enviar">
    </form>
    <h2>Su carrito de compra:</h2>
    <?php
    if (!isset($_COOKIE['zapatos']) && !isset($_COOKIE['cartera'])) {
        echo "<p style=color:red>El carrito está vacío</p>";
    } else {
        $zapatos = (isset($_COOKIE['zapatos'])) ? $_COOKIE['zapatos'] : 0;
        $cartera = (isset($_COOKIE['cartera'])) ? $_COOKIE['cartera'] : 0;
    ?>
        <table cellpadding=10>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th></th>
            </tr>
            <tr>
                <td>Zapatos de vidrio</td>
                <td><?= $zapatos ?></td>
                <td><a href="./carritoCookie.php?zapatos=eliminar">eliminar</a></td>
            </tr>
            <tr>
                <td>Cartera de cartón</td>
                <td><?= $cartera ?></td>
                <td><a href="./carritoCookie.php?cartera=eliminar">eliminar</a></td>
            </tr>
        </table>
    <?php } ?>
</body>

</html>