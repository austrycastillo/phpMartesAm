<?php
/*
include, include_once, require, require_once
*/

include_once "header.php";
?>
<p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora debitis corporis, suscipit qui accusamus fugiat commodi harum unde voluptatum sint exercitationem delectus officia deleniti esse, dignissimos, laborum temporibus? Facere, provident.
</p>
<p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora debitis corporis, suscipit qui accusamus fugiat commodi harum unde voluptatum sint exercitationem delectus officia deleniti esse, dignissimos, laborum temporibus? Facere, provident.
</p>
<p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora debitis corporis, suscipit qui accusamus fugiat commodi harum unde voluptatum sint exercitationem delectus officia deleniti esse, dignissimos, laborum temporibus? Facere, provident.
</p>
<p>
<form action="acceso.php" method="post">
    <input type="text" name="clave" placeholder="Escribe tu clave de acceso">
    <input type="submit" name="boton" value="Acceder">
</form>
</p>
<p>
    <strong>
        <?php
        // if (isset($_GET['rta'])) {
        //     $rta = $_GET['rta'];
        //     if ($rta == 'si') {
        //         echo "Bienvenido";
        //     } else {
        //         echo "Datos incorrectos";
        //     }
        // }

        if (isset($_GET['rta']) && $_GET['rta'] == 'si') {
            echo "Bienvenido";
        } elseif(isset($_GET['rta'])) {
            echo "Datos incorrectos";
        }

        ?>
    </strong>
</p>
<?php
include "footer.php";
