<h1>!!DOS!!</h1>
<?php
$nombre = isset($_GET["nombre"]) ? $_GET["nombre"] : "John"; // no hace falta que lo metas en una variable

$apellido = isset($_GET["apellido"]) ? $_GET["apellido"] : "Nieve";

function color($cod)
{
    $sol = "desconocido";
    switch ($cod) {
        case "r":
            $sol = "rojo";
            break;
        case "g":
            $sol = "verde";
            break;
        case "b":
            $sol = "azul";
            break;
    }
}
// $color=color(isset($_GET["r"])?$_GET["r"]:"nose");
$color = color($_GET["r"]);
echo "<h3>Hola $nombre $apellido </h3>";
echo "<h3> mi color favorito es el color $color </h3>";
?>