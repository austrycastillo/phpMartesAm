<h1 id="color">Color de web</h1>
<form action="" method="post">
Aquí puedes seleccionar el estilo que prefieres en la página:
<br>
<select name="estilo">
<option value="green">Verde</option>
<option value="pink">Rosa</option>
<option value="blank">Negro</option>
</select>
<input type="submit" value="Actualizar el estilo">
</form>
<?php
if(isset($_POST["estilo"])){
    //es que estoy recibiendo un estilo nuevo, lo tengo que meter en las cookies
    //crear cookies: setcookie
       $estilo = $_POST["estilo"];
       //meto el estilo en una cookie
       setcookie("estilo", $estilo, time() + (60 * 60 * 24 * 90));
    }else{
        //si no he recibido el estilo que desea el usuario en la página, miro si hay una cookie creada
        if (isset($_COOKIE["estilo"])){
           //es que tengo la cookie
           $estilo = $_COOKIE["estilo"];
        }
     }
     if (isset($estilo)){
        echo '<link rel="STYLESHEET" type="text/css" href="' . $estilo . '.css">';
        
     }
