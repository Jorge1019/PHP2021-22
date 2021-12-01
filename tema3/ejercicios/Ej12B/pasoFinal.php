<?php
session_start();

$_SESSION["array"][] = "{$_POST["sumar"]} ";
$f = 0;

echo "<h1>";
foreach ($_SESSION["array"] as $k) {
    $f += (int) $k;
}

foreach ($_SESSION["array"] as $k => $v) {

    if ($v != 0) {
        echo $v;
        echo ($k == array_key_last($_SESSION["array"])) ? "= " . $f : "+";
    }
}

echo "</h1></br>";
echo "</br> <a href='pasouno.php'>VOLVER</a></br>";

session_destroy();

?>