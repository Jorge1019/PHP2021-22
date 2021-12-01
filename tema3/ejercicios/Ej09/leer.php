
<?php 
session_start();
 echo "Usuario actual ". $_SESSION['cnt']['activo']."</br>";

 echo "<h3>Lista de mensajes de ". $_GET['name']."</br>       Fecha          Texto<br>";
 

 foreach($_SESSION["cnt"]["usuarios"][$_SESSION["cnt"]["activo"]]["mensajes"] as $r=>$j){
     
     
     if ($j["remitente"]==$_GET['name']){
         echo $j["fecha"]." &nbsp &nbsp".$j["texto"]."<br>";
     }
  
     
     
 }

 



?>
<a href='listaUsuarios.php'>Volver a lista de usuarios</a>