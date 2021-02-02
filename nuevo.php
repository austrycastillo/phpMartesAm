<?php
if (isset($_POST['enviar'])) {
    echo $imagenN = $_FILES['imagen']['name'];
    echo $imagenT = $_FILES['imagen']['tmp_name'];
    /***AQUI QUEDAMOS */
}
?>

<div class="container">
    <section id="page">
        <div class="register">
            <div class="register-top-grid">
                <form action="#" method="post" enctype="multipart/form-data">
                    <div class="mation">
                        <span>Producto: <label>*</label></span>
                        <input type="text" name="producto">
                        <span>Precio: <label>*</label></span>
                        <input type="text" name="precio">
                        <span>Presentación: <label>*</label></span>
                        <input type="text" name="presentacion">
                        <span>Stock: <label>*</label></span>
                        <input type="text" name="stock">
                        <span>Marca: <label>*</label></span>

                        <select name="marca">
                            <?php
                            $datos = listarMarcas();
                            foreach ($datos as $valor) {
                            ?>
                                <option value="<?= $valor['idMarca'] ?>"><?= $valor['Nombre'] ?></option>
                            <?php } ?>
                        </select><br><br>
                        <span>Categoria: <label>*</label></span>
                        <select name="categoria">
                            <?php
                            include "conexion.php";
                            $sql = 'SELECT *FROM categorias';
                            $result = $conexion->prepare($sql);
                            $result->execute();
                            $datos = $result->fetchAll();
                            foreach ($datos as $valor) {
                            ?>
                                <option value="<?= $valor['idMarca'] ?>"><?= $valor['Nombre'] ?></option>
                            <?php } ?>
                        </select><br><br>
                        <span>Imagen: <label>*</label></span>
                        <input type="file" name="imagen">
                        <div class="register-but">
                            <input type="submit" value="Guardar producto" name="enviar">
                        </div>
                    </div>
                </form>
            </div>
            <div class="clearfix"></div>
        </div>

    </section>
    <div class="clearfix"></div>
</div>