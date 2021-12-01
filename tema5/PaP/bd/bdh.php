<?php
function conectar()
{
    require_once 'rb.php';
    R::setup('mysql:host=localhost;dbname=texto', 'root', '');
}

function desconectar()
{
    R::close();
}
?>