<?php
include "cabecera.php";
echo "<h3>Generando tabla de multiplicar de un nº</h3>\n";
echo "<h4>tabla de multiplicar del 4</h4>\n";
echo "<table border=1>";
for ($i = 1; $i <= 10; $i++) {
    echo "<tr><td>4*" . $i . "</td><td>" . (4 * $i) . "</td></tr>";
}
echo "</table>";
include "pie.php";
