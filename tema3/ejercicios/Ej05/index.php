

<?php

session_start();


$a=isset($_SESSION["contador"])? $_SESSION["contador"]:$_SESSION["contador"]=0;




echo "<h1>NOS HAS VISITADO ".$a." VECES</h1>";
$_SESSION["contador"]++;

?>