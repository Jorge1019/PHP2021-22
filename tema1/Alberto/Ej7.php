<?php
$n = "";
$d = 0;
echo "Introduce una linea de texto: ";
fscanf(STDIN, "%s\n", $n);

echo "Introduce un n: ";
fscanf(STDIN, "%d\n", $d);

for ($i = 1; $i <= $d; $i ++) {

    echo "<h$i>" . $n . "</h$i>\n";
}

for ($s = $d - 1; $s >= 1; $s --) {
    echo "<h$s>" . $n . "</h$s>\n";
}
?>