<?php 

if (!isset($_COOKIE["adios"])) {
    
    echo "<form action='pantalla.php'>
<h1>Tratamiento de cookies</h1>
<h3>Primera ejecucion. Usted no esta conectado.</h3>
<h3>Usuario</h3><input type='text' name='nombre'><br/>
<h3>Clave</h3><input type='password' name='clave'><br/>
<input type='submit' value='Autenticar'>
</form>";
   
}else{
    setcookie("paises",$_GET['paises']);
    echo "<form action='pantalla.php'>
<h1>Tratamiento de cookies</h1>
<h3>Adios {$_COOKIE['adios']}. Usted no esta conectado.</h3>
<h3>Usuario</h3><input type='text' name='nombre'><br/>
<h3>Clave</h3><input type='password' name='clave'><br/>
<input type='submit' value='Autenticar'>
</form>";
   
}






?>

