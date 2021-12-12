<?php
// Operador ternario
echo "\n";
$edad = 18;

if ($edad >= 18) {
    echo "Mayor de edad";
} else {
    echo "Menor de edad";
}
echo "\n";

// CONDICION
echo $edad >= 18 ? "MAYOR" : "MENOR";
echo "\n";
// DIVISION ENTERA
echo (int) (99 / 10);
echo "\n";
// LA A ES MENOR Q LA B PQ VA DESPUES EN EL ABC Y TIENE UN CODIGO ASCII MAYOR (1 ES VERDADERO)
echo "a" < "b";
echo "\n";
// SINO ES VD NO SALE NADA
echo "a" > "b";
echo "\n";

echo "a" > "b" ? "VERDAD" : "MENTIRA";

// COMO P ES SOLO UNA LETRA ES MAYOR
echo "\n";
echo "p" > "Pepe" ? "VERDAD" : "MENTIRA";

echo "\n";
echo "z" > "Abigail" ? "VERDAD" : "MENTIRA";

echo "\n";
$a = 5;

switch ($a) {
    case 1:
        echo "UNO";
        break;
    case 1:
        echo "DOS";
        break;
    case 1:
        echo "TRES";
        break;
    default:
        echo "NO SE";
        break;
        echo "\n";
    // ESCAN
}
$nombre = " ";

echo "\n";
fscanf($nombre);

echo $nombre;

?>