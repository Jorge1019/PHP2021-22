<?php




echo"Dime un numero \n";
$num=10;
fscanf(STDIN,"%d\n", $num);
$cadena='';
$cuenta=0;
$parar=true;

do{
for ($i=0;$num>$i;$i++){
  
    if($num=$i){
        echo "\n";
        $i=0;
        $num--;
    }
    
    if ($cuenta==0){
        $cadena='+';
        $cuenta++;
        echo $cadena;
    }
    elseif ($cuenta==1){
        $cadena='-';
        $cuenta++;
        echo $cadena;
    }
    elseif ($cuenta==2){
        $cadena='.';
        $cuenta=0;
        echo $cadena;
    }
    
    
    
    
}



}

while($parar===true);

?>
