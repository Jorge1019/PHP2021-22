<?php

$colocado=isset($_COOKIE["cuenta"]) ;

if ($colocado){
    $numeroveces=$_COOKIE["cuenta"];
    setcookie("cuenta", $numeroveces+1);
}
else{
    setcookie("cuenta",1);
    $numeroveces=$_COOKIE["cuenta"];
}

isset($_COOKIE["n"]) ? $_COOKIE["n"] : setcookie("n",(int)$_GET["sumandos"]);

isset($_COOKIE["resultado"]) ? $_COOKIE["resultado"] : setcookie("resultado",0);
isset($_POST["sumar"]) ? $_POST["sumar"] : $_POST["sumar"] = 0;

if ($numeroveces == $_COOKIE["n"]) {

    echo <<<HTML
        <form action='pasoFinal.php' method='post'>
    Introduce tu sumando numero $numeroveces (1...10)</br>
    <input type='text' name='sumar'></br>
    <input type='submit' value='Enviar'>
    HTML;

    echo "</form>";
} else {

    echo <<<HTML
        <form method='post'>
    Introduce tu sumando numero $numeroveces (1...10)</br>
    <input type='text' name='sumar'></br>
    <input type='submit' value='Enviar'>
    HTML;

    echo "</form>";
}

$_COOKIE["resultado"] += (int)$_POST["sumar"];



?>