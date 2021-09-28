<?php
include "cabecera.php";

echo "<h3>Generando tablas de multiplicar hasta un nº</h3>\n";
echo "<h4>tablas de multiplicar hasta el 8</h4>\n";
echo "<table>";

echo "<tr><th>X</th>";

for ($s = 1; $s <= 8; $s++) {
    echo "<th>" . $s . "</th>";
}
echo '</tr>';

for ($i = 1; $i <= 8; $i++) {
    echo "<tr><td>" . $i . "</td>";
    for ($z = 1; $z <= 8; $z++) {
        echo "<td>" . ($i * $z) . "</td>";
    }
    echo "</tr>";
}

echo "</table>";

include "pie.php";
