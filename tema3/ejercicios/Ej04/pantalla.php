<?php
session_start();





if(isset($_SESSION($_GET["usuario"]))==null){
    
    $_SESSION[$_GET["usuario"]]++;
    
}
else{
    $_SESSION($_GET["usuario"])=0;
    
    $_SESSION[$_GET["usuario"]]++;
}

echo "<form action='index.php'>Usted esta conectado como {$_GET['usuario'] }. Numero de visitas {$_SESSION['usuario']} <br/>";

echo "<input type='submit' value='Desconectar'></form>";







?>