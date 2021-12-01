

<h1>Listado de cookies por nivel</h1>
Nivel 0 -->
<a href="nivel0/ListadoDeCookies.php">Listado de Cookies</a>
<br />
Nivel 0 Nivel 1 -->
<a href="nivel0/nivel1/ListadoDeCookies.php">Listado de Cookies</a>
<br />
Nivel 0 --> Nivel 1 --> Nivel 2 -->
<a href="nivel0/nivel1/nivel2/ListadoDeCookies.php">Listado de Cookies</a>
<br />
<h1>Creacion de cookies en diferentes niveles (directorios) en un script
	ubicado en /</h1>
<h2>Se permite fijar nombre y contenido de la cookie, asi como el nivel</h2>
<fieldset>
	<legend>Creacion De Cookie</legend>
	<form action="ubicatucookie.php">
		Nombre <input type="text" name="nombre"> Contenido <input type="text"
			name="contenido"><br /> Nivel <select name="num">
			<option value="0">0
			
			<option value="1">1
			
			<option value="2">2
		
		</select> <input type="submit" value="Crea Cookie">

	</form>



</fieldset>