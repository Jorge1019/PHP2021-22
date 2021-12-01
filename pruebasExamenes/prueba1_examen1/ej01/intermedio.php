<?php
echo "<form action='final.php'><fieldset><legend>Signos del Zodiaco</legend>";



$array=["Capricornio","Acuario","Piscis","Aries","Tauro","Géminis","Cáncer","Leo","Virgo","Libra","Escorpio","Sagitario"];

$mes=["enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre"];
for ($i=(int)$_GET["inferior"]-1;$i<=(int)$_GET["superior"]-1;$i++){
    
    if ($i==(int)$_GET["inferior"]-1){
    echo "<input type='radio' name='signo' value='$array[$i]' checked> $array[$i]</br>";
    }
    else {
        echo "<input type='radio' name='signo' value='$array[$i]'> $array[$i]</br>";
    }
    
}
echo "</fieldset><fieldset><legend>Meses del año</legend><select name='meses'>";
for ($i=(int)$_GET["inferior"]-1;$i<=(int)$_GET["superior"]-1;$i++){
    
    
        echo "<option value='$mes[$i]'>$mes[$i]</option>";
    
    
}
echo "</select></fieldset><input type='submit' value='Continuar'></form";





?>