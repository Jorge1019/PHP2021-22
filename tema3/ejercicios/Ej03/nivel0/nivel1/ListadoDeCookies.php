<table border="1">

	<tr>
		<th>NOMBRE</th>
		<th>CONTENIDO</th>
	</tr>
<?php
foreach ($_COOKIE as $k => $a) {

    echo "<tr><td>$k</td><td>$a</td></tr>";
}

?>





</table>
