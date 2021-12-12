<?php 

session_start();

isset($_GET["contrasena1"])?$_GET["contrasena1"]:$_GET["contrasena1"]="";
isset($_GET["nombre1"])?$_GET["nombre1"]:$_GET["nombre1"]="";

if($_GET["nombre1"]!="" && $_GET["contrasena1"]!=""){
    
    $_SESSION["cnt"]["usuarios"][$_GET["nombre1"]]=["pwd"=>$_GET["contrasena1"],"mensajes"=>[]];
  
}

$recor=isset($_SESSION["cnt"]["recordar"])?$_SESSION["cnt"]["recordar"] :false;
$act=isset($_SESSION["cnt"]["activo"])?$_SESSION["cnt"]["activo"] :"";
$usu=isset($_SESSION["cnt"]["usuarios"])?$_SESSION["cnt"]["usuarios"] :[];

$_SESSION["cnt"]=[
    
  "activo" => "",
    "recordar" => $recor,
    "usuarios"=> $usu
    
];






if ($_SESSION["cnt"]["recordar"]==false){
    echo "<form action='listaUsuarios.php'>
<h1>LOGIN</h1></br>
Usuario <input type='text' name='nombre'></br>
Contrasena <input type='password' name='contrasena'></br>
Recordar <input type='checkbox' name='recuerda'></br>
<input type='submit' value='Enviar'></br>
<a href='registrar.php'>Registrar nuevo usuario</a>
</form>";
}
else if ($_SESSION["cnt"]["recordar"]==true){
    
    
    echo"<form action='listaUsuarios.php'>
<h1>LOGIN</h1></br>
Usuario <input type='text' name='nombre' value='{$act}'></br>
Contrasena <input type='password' name='contrasena'></br>
Recordar <input type='checkbox' name='recuerda' checked ></br>
<input type='submit' value='Enviar'></br>
<a href='registrar.php'>Registrar nuevo usuario</a>
</form>";
    
    
    
}




?>