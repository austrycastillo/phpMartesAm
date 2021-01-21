<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="nombre" placeholder="Nombre" ><br>
        <input type="text" name="ingrediente" placeholder="Ingredientes" ><br>
        <input type="number" name="precio" placeholder="Precio" ><br>
        <input type="submit" name="enviar" value="Guardar comida" >
    </form>
    <?php
    if(isset($_POST['enviar'])){
        include 'conexion.php';
        include 'funciones.php';
        guardarComida($conexion,$_POST);
    }
    ?>
</body>
</html>