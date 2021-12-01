<?php
$arrayasociativo = array(
    "Juan" => "29",
    "Pedro" => "18",
    "Eduardo" => "26"
);

// orden ascendente
asort($arrayasociativo);
foreach ($arrayasociativo as $n) {

    echo $n . "\n";
}

echo (int) (103 / 5);//truncar
array_push($array)//para meter en el array numeros como si lo hicieras con un contador
in_array($needle, $haystack)//buscar en un array
array_pop($array)//te elimina el ultimo del array
foreach(array_keys(array) as $v){//para recorrer los indices
    print_r($expression)//te pinta todo el contenido de una funcion, incluyendo arrays
    echo "sadohdas {$array[][]}"; // cuando hay mas de un indice en un array hay que poner corchetes

    // ETIQUETAS
    echo <<<JORGE
        
        
    <body>
    <h1>QUE TAL</h1>
    </body>
    JORGE;
}
strlen($string)//numero de caracteres en una cadena
substr($c,1, 3)//dame el substring de una cadena hasta otra , de c, empezando 1 tres caracteres a la derecha incluytedole a el
ltrim,rtrim,trim//quitan espacios barras, para formularios que no haya sitios en vacio, ltrim pa izquierda trim para todo


foreach (explode(' ', $c) as $n) {
    ; // coge una cadena y crea un array a partir de ese caracter, ej espacio para coger cada letra de una frase
}
implode(' ', $a)?> // crea un string de un array, lo pega
                     // Los caracteres especiales como la ñ o las tildes cuentan como dos caracteres en vez de uno
