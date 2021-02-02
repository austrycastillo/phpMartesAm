<?php
include_once 'admin/conexion.php';
function cargarPagina($page)
{
    $page = $page . ".php";
    include $page;
}
function mostrarMensaje($rta)
{
    switch ($rta) {
        case "0X001":
            $mensaje = "<strong style=color:red>Verifique el campo de nombre</strong>";
            break;
        case "0X002":
            $mensaje = "<strong style=color:red>Verifique el campo de email</strong>";
            break;
        case "0X003":
            $mensaje = "<strong style=color:red>Verifique el campo de mensaje</strong>";
            break;
        case "0X004":
            $mensaje = "<strong style=color:green>Contacto enviado correctamente</strong>";
            break;
        case "0X005":
            $mensaje = "<strong style=color:red>No se puede enviar el correo</strong>";
            break;
        case "0X006":
            $mensaje = "<strong style=color:green>Usuario registrado correctamente</strong>";
            break;
        case "0X007":
            $mensaje = "<strong style=color:red>No se puede registrar el usuario</strong>";
            break;
        case "0X008":
            $mensaje = "<strong style=color:green>Producto eliminado correctamente</strong>";
            break;
        case "0X009":
            $mensaje = "<strong style=color:red>No se puede eliminar el producto</strong>";
            break;
        default:
            $mensaje = "No existe el código de error";
    }
    return $mensaje;
}

function mostrarProductos()
{
    $archivo = "listadoProductos.csv";
    if ($x = fopen($archivo, "r")) {
        while ($datos = fgetcsv($x, 1000, ",")) {

?>
            <div class="product-grid">
                <div class="content_box">
                    <a href="producto.php">
                        <div class="left-grid-view grid-view-left">
                            <img src="images/productos/<?= $datos[0]; ?>.jpg" class="img-responsive watch-right" alt="" />
                        </div>
                    </a>
                    <h4><a href="#"><?= $datos[1]; ?></a></h4>
                    <p>Marca: <?= $datos[4]; ?>, Capacidad: <?= $datos[5]; ?>, Stock <?= $datos[3]; ?> blablablabla</p>
                    <span>$<?= $datos[2] ?></span>
                </div>
            </div>
<?php
        }
        fclose($x);
    } else {
        echo "Error no puedo abrir el archivo";
    }
}

function registrarUsuario($nombre, $apellido, $email, $clave)
{
    try {
        global $conexion; //llamo a la conexión
        $clave = password_hash($clave, PASSWORD_DEFAULT);
        $sql = "INSERT INTO usuarios (nombre,apellido,email,clave) VALUES (?,?,?,?)";
        $result = $conexion->prepare($sql);
        $result->bindParam(1, $nombre, PDO::PARAM_STR);
        $result->bindParam(2, $apellido, PDO::PARAM_STR);
        $result->bindParam(3, $email, PDO::PARAM_STR);
        $result->bindParam(4, $clave, PDO::PARAM_STR);
        if ($result->execute()) {
            $rta = "0X006";
        } else {
            $rta = "0X007";
        }
        return $rta;
    } catch (PDOException $e) {
        echo "error" . $e->getMessage();
    } finally {
        $conexion = null;
    }
}


function eliminarProducto($idProducto)
{
    try {
        global $conexion;
        $sql = "DELETE FROM productos WHERE idProducto=?";
        $result = $conexion->prepare($sql);
        $result->bindParam(1, $idProducto, PDO::PARAM_INT);
        //unlink("fichero");
        if ($result->execute()) {
            $rta = "0X008";
        } else {
            $rta = "0X009";
        }
        return $rta;
    } catch (PDOException $e) {
        echo "error" . $e->getMessage();
    } finally {
        $conexion = null;
    }
}

function guardarProducto($datos)
{
    $producto = $datos['producto'];
    $precio = $datos['precio'];
    $presentacion = $datos['presentacion'];
    $stock = $datos['stock'];
    
    // $imagenN=$datos
    /*
$_FILES["archivo"]["type"]
$_FILES["archivo"]["size"]
$_FILES["archivo"]["name"]
$_FILES["archivo"]["tmp_name"]
$_FILES["archivo"]["error"]
move_upload_file(nombre_temporal,directorio/nombre_imagen);
    */
}

function listarMarcas()
{
    global $conexion;
    try {
        $sql = 'SELECT *FROM marcas';
        $result = $conexion->prepare($sql);
        if ($result->execute()) {
            $datos = $result->fetchAll();
            return $datos;
        }
    } catch (PDOException $e) {
        echo "error" . $e->getMessage();
    } finally {
        $conexion = null;
    }
}


