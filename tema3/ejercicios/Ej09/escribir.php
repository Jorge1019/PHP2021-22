
<form action="listaUsuarios.php">




<?php 
session_start();

echo "De: <input type='text' name='rem' value=".$_SESSION['cnt']['activo']." readonly><br>Para: 
<input type='text' name ='recibir' value=".$_GET["name"]." readonly><br> Escribe el contenido del mensaje<br>
<textarea name='msg'></textarea> ";


?>
<br><input type="submit" value="Enviar">


</form>