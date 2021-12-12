 <?php
session_start();
$_SESSION["calamar"] = "chocolate"; // si queremos borrar una variable de sesion usamos unset delante
?><h1> Te quiero tanto como al <?=$_SESSION["calamar"]?></h1>




