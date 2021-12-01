
<form action='resultado.php'>
	SELECCIONE UNA OPCION</br>
<?php
$etiqueta = [
    "Uno",
    "Dos",
    "Tres",
    "Cuatro",
    "Cinco",
    "Seis",
    "Siete",
    "Ocho",
    "Nueve",
    "Diez",
    "Once",
    "Doce",
    "Trece",
    "Catorce",
    "Quince"
];

for ($i = 1; $i <= intval($_GET['n']); $i ++) {

    $v = $i - 1;
    echo <<<HTML
    $etiqueta[$v]
    <input type="radio" name="r" value="$i"/>
    </br>
    
    HTML;
}

?>
<input type='submit' value='Enviar' />
</form>