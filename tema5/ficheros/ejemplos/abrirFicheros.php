<?php
//apertura de ficheros 

$f = fopen("fichero.txt","r"); //nombre de fichero, modo de apertura
$f1 = fopen("fichero1.txt","r");
//la a para escribir con el fichero, w+ si no esta creado se crea, w te sobreescribe lo que hay, y r te lo lee

//escribir fputs($f, "\nQuien sos Rubén");

//leer primera linea  echo fgets($f);



//leer todas las lineas while (!feof($f)){ echo fgets($f); }


//escribir un archivo encima de otro cambiando cosas while (!feof($f)){ fputs($f1,implode("amor",explode("perro",fgets($f)))); }

while (!feof($f1)){ echo fgets($f1); }
//cierre de fichero

fclose($f);


?>