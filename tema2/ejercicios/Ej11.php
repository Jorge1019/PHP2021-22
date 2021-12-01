<?php


//ESTO EN EL 9 AQUI PA SEPARARLO :)

/*
function pintarRadio($nombre,$arrayValueLabel,$seleccionado){
   $html="";
   
   foreach($arrayValueLabel as $value => $label){
       $seleccionar=($seleccionado==$value) ?'checked="checked"': " ";
       $html.= <<<HTML
        
    <input type='radio' name='$nombre' value='$value' id='$value' $seleccionar >
    <label for ='$value'>$label</label><br/>

    
    
HTML;
   }
   
    return $html;
}

?>