<?php

$v=1;
$a=isset($_COOKIE["sumando"]) ? $_COOKIE["sumando"] : setcookie("sumando",(string) $v);

isset($_COOKIE["n"]) ? $_COOKIE["n"] : setcookie("n", $_GET["sumandos"]);

isset($_COOKIE["array"]) ? $_COOKIE["array"] : setcookie("array",[]);
isset($_POST["sumar"]) ? $_POST["sumar"] : $_POST["sumar"] = 0;

if (9 == $_COOKIE("n")) {

    echo <<<HTML
        <form action='pasoFinal.php' method='post'>
    Introduce tu sumando numero $a (1...10)</br>
    <input type='text' name='sumar'></br>
    <input type='submit' value='Enviar'>
    HTML;

    echo "</form>";
} else {

    echo <<<HTML
        <form method='post'>
    Introduce tu sumando numero $a (1...10)</br>
    <input type='text' name='sumar'></br>
    <input type='submit' value='Enviar'>
    HTML;

    echo "</form>";
}

$_SESSION["array"][] = "{$_POST["sumar"]} ";

$v ++;
?>