<head>

<script>

function usarAJAX(){

var xmlhttp=new XMLHttpRequest();
xmlhttp.open("GET","ajax.php",true); /*el true es que si quiero que sea asincrona, en este caso si*/
xmlhttp.send();

xmlhttp.onreadystatechange=function(){
if (xmlhttp.readyState==4 && xmlhttp.status==200){
document.getElementById("idDiv").innerHTML=xmlhttp.responseText;
}

}

}

</script>

</head>

<body>
<h2>Texto fijo</h2>
<div id="idDiv"><h2>Texto cambiante</h2></div>
<button type="button" onclick="usarAJAX()">Cambiar</button>
</body>