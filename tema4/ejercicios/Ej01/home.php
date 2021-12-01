<head>

<script>
function usarAJAX(){

var xmlhttp=new XMLHttpRequest();
xmlhttp.open("GET","ajax.php?nombre=+document.getElementById('nombre').value",true); 
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
<h1>SALUDADOR</h1>

<h3>Introduce un nombre</h3><input type="text" id="nombre"><div id="idDiv"></div>
<input type="button" value="Saludar" onclick="usarAJAX();">

</body>