<head>
<script>

function f() {
var xmlhttp = new XMLHttpRequest();
//Abre la conexion
xmlhttp.open("GET","ajax.php?ccaa="+document.getElementById('ccaa').value,true);
xmlhttp.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

xmlhttp.send();

xmlhttp.onreadystatechange=function() {
if (xmlhttp.readyState==4 && xmlhttp.status==200) {
document.getElementById("prv").innerHTML= xmlhttp.responseText;
}
}
}

</script>


</head>

<body>
<h1>Comunidades Autónomas</h1></br>
<?php 
include 'comunidadesA.php';

echo "CCAA<select id='ccaa' onChange='f()'>";
foreach ($comunidades as $k=>$v){
echo "

<option>$k</option>";
}

echo <<<HTML
</select></br>Provincias<select id='prv'>
HTML;

foreach ($comunidades["Andalucía"] as $k) {

    echo "<option>$k</option>";

}


echo <<<HTML
 </select></br>

<h3>Escoge una comunidad autónoma</h3></br>
OBSERVA EL CAMBIO DE PROVINCIAS VIA AJAX
</body>



HTML;

?>
