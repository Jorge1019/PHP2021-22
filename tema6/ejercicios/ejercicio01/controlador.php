<?php
require_once('modelo.php');
$modelData=getSaludo();

header('Content-Type: text/html; charset=UTF-8');
require_once('vista.php');
?>