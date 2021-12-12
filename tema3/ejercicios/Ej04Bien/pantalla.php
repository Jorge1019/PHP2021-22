<?php
echo "<form action='index.php'>";
setcookie("adios",$_GET['nombre']);


if (!isset($_COOKIE[$_GET["nombre"]])){
    
    echo "<h3> Hola {$_GET['nombre']}, es su visita numero 1</h3>";
    setcookie($_GET["nombre"],"1%1") ;
$contador=1;
    echo "<input type='radio' value='1' name='paises'  checked ><img src='es.png' width='27' height='18' >
                     <input type='radio' value='2' name='paises'><img src='fr.png' width='27' height='18' >
                     <input type='radio' value='3' name='paises'><img src='uk.png' width='27' height='18 '>";
   
    setcookie("paises",1);
}
else{
    $array=explode($_COOKIE[$_GET["nombre"]], "%");
    $contador=(int)$array[0];
    $contador++;
    setcookie($_GET["nombre"],$contador."%".$_COOKIE["paises"]);
  
    
    echo "<h3>  Hola {$_GET['nombre']} , es su visita numero $contador</h3>";
    
    switch  ( (int)$array[1]) {
        case 1:echo "<input type='radio' value='1' name='paises'  checked ><img src='es.png' width='27' height='18' >
                     <input type='radio' value='2' name='paises'><img src='fr.png' width='27' height='18' >
                     <input type='radio' value='3' name='paises'><img src='uk.png' width='27' height='18 '>";;break;
        
        case 2:echo"<input type='radio' value='1' name='paises'   ><img src='es.png' width='27' height='18 '>
                     <input type='radio' value='2' name='paises' checked><img src='fr.png' width='27' height='18 '>
                     <input type='radio' value='3' name='paises'><img src='uk.png' width='27' height='18 '>";;break;
        
        case 3:echo "<input type='radio' value='1' name='paises' ><img src='es.png' width='27' height='18' >
                     <input type='radio' value='2' name='paises' ><img src='fr.png' width='27' height='18' >
                     <input type='radio' value='3' name='paises' checked><img src='uk.png' width='27' height='18' >";;break;
        
        
    }
}

echo "<input type='submit' value='Desconectar'></form>";




?>