<?php
$nombre = isset($_GET['nombre']) ? $_GET['nombre'] : null;
$pwd = isset($_GET['pwd']) ? $_GET['pwd'] : null;

if ($nombre == null && $pwd == null) {
    echo <<<HTML
    <form>
    Nombre
    <input type "text" name="nombre"/>
    <br/>
    Contrasena
    <input type="password" name="pwd"/>
    </br>
    <input type="submit"/>
    </form>
    
    HTML;
} 
else {
    echo <<<HTML
    <h3> Hola $nombre, tu contrasena ess $pwd</h3>
    HTML;
}

?>

