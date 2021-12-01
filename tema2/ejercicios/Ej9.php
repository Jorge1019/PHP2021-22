<?php

function resaltar($texto)
{
    echo "<h1> $texto</h1>";
}

// EJ11
function pintarRadio($nombre, $arrayValueLabel, $seleccionado)
{
    $html = "";
    foreach ($arrayValueLabel as $value => $label) {
        $seleccionar = ($seleccionado == $value) ? 'checked="checked"' : " ";
        $html .= <<<HTML
                
            <input type='radio' name='$nombre' value='$value' id='$value' $seleccionar >
            <label for ='$value'>$label</label><br/>
            
            
            
        HTML;
    }

    return $html;
}

// EJ 12
function pintarCheckboxes($nombre, $array)
{
    $html = "";
    foreach ($array as $value => $label) {
        $html .= <<<HTML
                
            <input type='checkbox' name='{$nombre}[]' value='$value' id='$value'  >
            <label for ='$value'>$label</label><br/>
            
            
            
        HTML;
    }
    return $html;
}

// EJ13
function pintarCheckboxes2($nombre, $array, $seleccionado)
{
    $html = "";

    foreach ($array as $value => $label) {
        $seleccionar = (in_array($value, $seleccionado)) ? 'checked="checked"' : " ";

        $html .= <<<HTML
                
            <input type='checkbox' name='{$nombre}[]' value='$value' id='$value' $seleccionar  >
            <label for ='$value'>$label</label><br/>
            
            
            
        HTML;
    }
    return $html;
}

// EJ14
function pintarSelect($nombre, $array, $seleccionado)
{
    $html = "";

    foreach ($array as $value) {
        $seleccionar = (in_array($value, $seleccionado)) ? 'checked="checked"' : " ";

        $html .= <<<HTML
                
            <select name='$nombre'>  value='$value' id='$value' $seleccionar <select/>
        
            
            
            
        HTML;
    }
    return $html;
}

?>