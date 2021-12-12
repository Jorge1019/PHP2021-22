
<?php
$jorge = isset($_COOKIE["jorge"]) ? $_COOKIE["jorge"] : "NO EXISTE";
$peligro = isset($_COOKIE["peligro"]) ? $_COOKIE["peligro"] : "NO EXISTE";

setcookie("jorge", "Te la he colado ;)");
setcookie("peligro", "Esta web esta malita :("); // nombre de la cookie, la informacion ?>



<h1>Hola desde el servidor</h1>

<ul>

	<li>Cookie "Jorge": <?=$jorge !=null?$jorge:""?></li>
	<li>Cookie "Peligro": <?=$peligro !=null?$peligro:""?></li>

</ul>

<p>Te acabo de poner una cookie que se llama ?? con el valor ??</p>