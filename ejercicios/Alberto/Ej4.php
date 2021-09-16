<?php

$n=1;
$parar=5;
$sumar=-1;
$multiplicar=1;
$operacion="";
$parar1=false;
do{
    $sumar=$n+$sumar;
    $multiplicar=$n*$multiplicar;
    echo "Introduce n: ";
    fscanf(STDIN,"%d\n", $n);
    
   
    echo "\n";
    
    if($n==0){
        
        do{
        echo "Operacion: ";
        fscanf(STDIN,"%s\n", $operacion);
        
        if($operacion==="sumar"){
            echo "La suma de todos tus numeros introducidos es: $sumar";
            $parar1=true;
            $parar=$n;
        }
        
        elseif($operacion==="multiplicar"){
            echo "La multiplicacion de todos tus numeros introducidos es: $multiplicar";
            $parar1=true;
            $parar=$n;
        }
        else{
            
            
            echo "No te he entendido, puedes elegir entre 'sumar' o 'multiplicar' \n ";
            
        }
   }
   while($parar1=false);
    }
    
    
    
    
}

while($parar!=0);




?>