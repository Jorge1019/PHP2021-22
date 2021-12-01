
<?php session_start(); $_SESSION["numero1"]=$_GET["numero1"]?>

<h1>Introduce otro número </h1></br>
<form action="parte03.php">
<input type="text" name="numero2" pattern="[1-9]"><input type="submit" value="Siguiente">
</form>