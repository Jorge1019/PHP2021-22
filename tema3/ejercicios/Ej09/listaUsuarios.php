<?php 

session_start();

isset($_GET["nombre"])?$_GET["nombre"]:null;

if ($_SESSION['cnt']['activo']!=""  || isset($_SESSION["cnt"]["usuarios"][$_GET["nombre"]]["pwd"])){
    
    isset($_GET["recuerda"])? $_SESSION["cnt"]["recordar"]=true : $_SESSION["cnt"]["recordar"]=false;
    isset($_GET["nombre"])?$_SESSION["cnt"]["activo"]=$_GET["nombre"]:$_SESSION["cnt"]["activo"];
    

echo "Usuario actual ". $_SESSION['cnt']['activo']."</br>
<h3>Lista de Usuarios / Mensajes</h3></br>";

isset($_GET["msg"])?$_SESSION["cnt"]["usuarios"][$_GET["recibir"]]["mensajes"][]=["remitente"=>$_GET["rem"],"fecha"=>date("d/m/Y (H:i)"),"texto"=>$_GET["msg"]]:null;
$cont=0;

foreach ($_SESSION["cnt"]["usuarios"] as $k=>$v){
    if ($k!=$_SESSION["cnt"]["activo"]){
   
        if (!empty($_SESSION["cnt"]["usuarios"][$_SESSION["cnt"]["activo"]]["mensajes"])){
         
            foreach($_SESSION["cnt"]["usuarios"][$_SESSION["cnt"]["activo"]]["mensajes"] as $r=>$j){
                
                if ($j["remitente"] == $k){
                    $cont++;
                }
                
               
                
            }
            
        }
        
        
        echo ($k)." (";
        
        echo $cont.")";
        if($cont>0){
            echo"  &nbsp <a href='leer.php?name=$k' > Leer</a>";
            
            
        }
          echo "</a> &nbsp  <a href='escribir.php?name=$k'> Escribir </a> " ;
   
        echo "<br>";
    
   $cont=0;
}
}
echo "<a href='login.php'>Volver al login</a>";




}
else{
    
    echo "<h1> TUS CREDENCIALES NO SON CORRECTAS</h1></br>";

    header("refresh:3; url=login.php");
    
}
?>

