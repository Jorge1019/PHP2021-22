<?php
$f = fopen("fichero.txt", "a");

fputs($f,"<b><u>".$_GET["dato"]."</u></b>");


$f = fopen("fichero.txt", "r");
while (!feof($f)){ echo fgets($f); }


?>