<form action "crearPersona.php">
Nombre :<input type="text" name="persona">

Pais:
<select>
<?php 
function conectar(){
    require_once '../../rb.php';
    R::setup('mysql:host=localhost;dbname=test','root','');
}

function desconectar(){
    
    R::close();
}
function recuperar(){
   $paises = R::findAll('pais');
   foreach ($paises as $pais)
   {    echo "<option>{$pais->nombre}</option>";}
    
}
conectar();
recuperar();
desconectar();
?>




</select>







</form>