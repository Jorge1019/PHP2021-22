<?php
$f=fopen("fichero.txt","r");

echo "<textarea>";

while (!feof($f)){ echo fgets($f); }

echo "</textarea>" ;