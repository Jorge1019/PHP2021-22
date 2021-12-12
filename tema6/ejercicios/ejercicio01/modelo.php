<?php
function getSaludo() {
    $db = new PDO('mysql:host=localhost;dbname=texto', 'root', '');
    $sentencia = $db->prepare('select saludo from saludos');
    $sentencia->execute();
    $db=null;
    return $sentencia->fetchAll();
}