<?php 

session_start();
echo "<h3> Primer número: {$_SESSION['numero1']} </br>Segundo número: {$_GET['numero2']}</br>";

if ((int)$_SESSION['numero1']>(int)$_GET['numero2']){
    
    echo "EL primer numero es MAYOR que el segundo</h3>";
    
    
}
if ((int)$_SESSION['numero1']<(int)$_GET['numero2']){
    
    echo "EL primer numero es MENOR que el segundo</h3>";
    
    
}
if ((int)$_SESSION['numero1']==(int)$_GET['numero2']){
    
    echo "EL primer numero es IGUAL que el segundo</h3>";
    
    
}

echo "<a href='parte01.php'>Volver a introducir los números</a>";

?>