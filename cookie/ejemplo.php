<?php
setcookie("frutas","banana",time()+(60*60*24*60));
setcookie("animales","mono",time()+(60*60*24*60));
setcookie("paisaje","selva",time()+(60*60*24*60));
if(isset($_COOKIE['frutas'])){
    echo $_COOKIE['frutas'];
}