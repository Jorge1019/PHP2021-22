<?php
session_start();

$a = isset($_SESSION["sumando"]) ? $_SESSION["sumando"] : $_SESSION["sumando"] = 1;
isset($_SESSION["n"]) ? $_SESSION["n"] : $_SESSION["n"] = (int) $_GET["sumandos"];
isset($_SESSION["array"]) ? $_SESSION["array"] : $_SESSION["array"] = [];
isset($_POST["sumar"]) ? $_POST["sumar"] : $_POST["sumar"] = 0;

if ($a == $_SESSION["n"]) {

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

$_SESSION["sumando"] ++;
?>