
<form action="esquema.php">
Nombre del producto<input type="text" name ="nombre">
</br>
Precio del producto<input type="text" name ="precio" >
</br>
<input type="submit" value="Insertar">
<input type="button" value="Preparar" name="preparar">




</form>
<?php
require_once '../../utilBD.php';
$bd= conectarMySQL();//aqui dentro se pone a que tabla se quiere acceders

$insertar=([ ['cocacola', 1.2], ['mejillones', 3.23], ['abrelatas', 4.34] ] );

if (isset($_GET["nombre"]) && isset($_GET["precio"])){
    $insertar=[[$_GET["nombre"],(float)$_GET["precio"]]];
}

foreach ($insertar as $k){
    
   

$sql="insert into producto(nombre,precio) values('$k[0]',$k[1])";




try{
    $bd->exec($sql);
    echo "Producto creado\n";
}
catch(Exception $e){
 
}
}

$sql="SELECT * FROM producto";
$resultado=$bd->query($sql);
foreach ($resultado as $f){
    echo 'NOMBRE: '.$f['nombre']." PRECIO:".$f['precio']."</br>";
}





?>